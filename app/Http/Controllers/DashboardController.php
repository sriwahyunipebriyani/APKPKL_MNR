<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\documents;
use App\Models\User;
use Illuminate\Support\Facades\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $documents = documents::all();
        $docCount = documents::count();
        $categoryCount = category::count();
        $userCount = User::count();
        return view('dashboard', [
            'doc_count' => $docCount,
            'category_count' => $categoryCount,
            'user_count' => $userCount,
            'documents' => $documents,
        ]);
    }

    public function searchDocument(Request $request)
    {
        $searchDocument = documents::all();
        if ($request->documents) {

            $searchDocument = documents::where('sender', 'like', '%' . $request->sender . '%')->latest()->paginate(15);
            return view('dashboard', compact('searchDocument'));
        } else {
            return redirect()->back()->with('message', 'Empaty search');
        }
    }
}
