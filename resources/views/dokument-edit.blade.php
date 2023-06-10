@extends('layouts.mainLayout')
@section('title', 'edit')
@section('content')



                <div class="card w-75" id="card">
                    <form action="{{url("dokument-edit/".$documents->id)}}"method="post">
                    {!! csrf_field() !!}
                        
                        <div class="card-header">
                            view file
                        </div>
                        <div class="card-body">
                        
                            <div class="mt-2">
                                <label for="date_Received" class="form-label">Date received</label>
                                <input type="date" class="form-control" name="date_Received" id="date_Received" value="<?= date('Y-m-d')?>" >
                            </div>
                            <div class="mt-2">
                            
                                <label for="status" class="form-label">status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="{{$documents->status}}">{{$documents->status}}<option>
                                    <option value="accepted">accepted</option>
                                    <option value="rejected">rejected</option>
                                </select>   
                            </div>
                            <div class="mt-2" > 
                                <label for="keterangan" class="form-label" value="{{$documents->description_reject}}">description</label>
                                <textarea class="form-control " placeholder="example: in the wrong PO number"  name="description_reject" id="description_reject" style="height: 100px" ></textarea>
                            </div>
                            
                            <div class="form-group mt-2 me-3">
                                <input type="submit" class="btn btn-success" value="update">
                                <button class="btn btn-secondary" type="button" onclick="window.location='/dokument'">&laquo; Back</button>
                            </div>
                            {{-- <div class="d-flex justify-content-end">
                                </div> --}}
                            
                        </div>
                    </form>
                </div>
        {{-- untuk membuka file pdf --}}
        {{-- <iframe src="demo_iframe.htm" height="200" width="300" title="Iframe Example"></iframe> --}}
    
@endsection