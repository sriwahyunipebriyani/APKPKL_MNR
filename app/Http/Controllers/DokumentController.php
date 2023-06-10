<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\documents;
use Illuminate\Http\Request;

class DokumentController extends Controller
{
    public function index()
    {
        $documents = documents::all();
        return View('dokument', ['documents' => $documents]);

    }

    public function add()
    {
        $categories = category::all();
        return view('dokument-add', ['categories' => $categories]);
    }
    public function input(Request $request)
    {
        $validated = $request->validate([
            'no_purchase_other' => 'required|unique:documents|max:255',
            'no_request' => 'required|max:191',
        ]);

        $newName = '';
        if ($request->file('dataFile')) {
            $extension = $request->file('dataFile')->getClientOriginalExtension();
            $newName = $request->file . '-' . now()->timestamp . '.' . $extension;
            $request->file('dataFile')->storeAS('file', $newName);
        }

        $request['file'] = $newName;
        $documents = documents::create($request->all());
        // $documents->categories()->sync($request->categories);
        return redirect('dokument')->with('status', 'document added Successfully');

    }

    public function delete($slug)
    {
        $documents = documents::where('slug', $slug)->first();
        $documents->delete();
        return redirect('dokument')->with('status', 'Document Deleted Successfully');
    }
    public function deletedDoc()
    {
        $deletedDoc = documents::onlyTrashed()->get();
        return view('dokument-deleted', ['deletedDoc' => $deletedDoc]);
    }
    public function forceDelete($id)
    {
        $documents = documents::onlyTrashed()->find($id)->forceDelete();
        return redirect()->back();
    }
    public function Restore($slug)
    {
        $document = documents::withTrashed()->where('slug', $slug)->first();
        $document->restore();
        return redirect('dokument')->with('status', 'dokument restored Successfully');
    }

    public function edit($id)
    {
        $documents = documents::find($id);
        return View('dokument-edit', ['documents' => $documents]);

    }
    public function update(Request $request, $id)
    {

        $documents = documents::find($id);
        $input = $request->all();
        $documents->update($input);
        return redirect('dokument')->with('status', 'dokument updated Successfully');
    }

    public function view($id)
    {
        // $documents = documents::find($id);
        // $pdf = Pdf::loadView('dokument-view', ['documents' => $documents, 'id' => $id]);
        // return $pdf->stream();
        $documents = documents::find($id);
        // $documents = documents::all();
        return View('dokument-view', ['documents' => $documents, 'id' => $id]);

    }
}
