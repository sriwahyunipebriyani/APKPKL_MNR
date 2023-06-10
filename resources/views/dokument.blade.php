@extends('layouts.layoutMain')
@section('tema', 'dokument')
@section('tampilan')
@section('content2')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    @if (Auth::user()->role_id == 2)
    <div class="mt-2"><h3> Welcome {{Auth::user()->username}} to document</h3></div>  
@endif
    <div class="mt-4 d-flex justify-content-end">
        @if (Auth::user()->role_id == 1)
        <a href="document-add" class="btn btn-secondary m-2">Add Data</a>
        <a href="dokument-deleted" class="btn btn-outline-danger m-2">Deleted Data</a>
    </div>
    
        <a href="/dokument-delete/" class="btn btn-danger" id="deleteAllSelectRecord">Delete all selected</a>   
    

    <div class="d-flex justify-content-end">
    @else
    <a href="document-add" class="btn btn-secondary m-2">Add Data</a>
    @endif
    </div>

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

@if (Auth::user()->role_id == 1)
            <div>
                <table class="table mt-3" >
                    <thead>
                    <tr>
                        <th><input type="checkbox" name="" id="select_all_ids" ></th>
                        <th scope="col">no</th>
                        <th scope="col">sender</th>
                        <th scope="col">Date Send</th>
                        <th scope="col">Destination Sent</th>
                        <th scope="col">file</th>
                        <th scope="col">status</th>
                        <th scope="col">Action</th>
                        
                    </tr>
                    </thead>
                        <tbody>
                            @foreach ($documents as $items)
                            <tr id="documents_ids {{$items->id}}" class="{{$items->status == 'waiting' ? '' : ($items->status == 'accepted' ? 'bg-success p-2 text-white bg-opacity-25"' : 'bg-danger p-2 text-white bg-opacity-25"')}}" >
                                <td>
                                    <input type="checkbox"name="ids" class="checkbox_ids" value="{{$items->id}}" id="">
                                </td>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{$items->sender}}</td>
                                <td>{{$items->date_send}}</td>
                                <td>{{$items->destination_sent}}</td>
                                <td>
                                    <a href="{{url('/view',$items->id)}}">{{$items->file}}</a>
                                </td>
                                <td>{{$items->status}}</td>
                                <td>
                                    <a href="{{url('/dokument-edit',$items->id)}}" class=" text-warning me-2"><i class="bi bi-pen-fill"></i></a>
                                    <a href="/dokument-delete/{{$items->slug}}" class="text-secondary me-2"><i class="bi bi-trash3-fill"></i></a>
                                </td>
                            
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
            </div>

@else 

    
        <table class=" table mt-3" >
            <thead>
                <tr >
                    <th >No</th>
                    <th >Sender</th>
                    <th >No PO</th>
                    <th >No PR</th>
                    <th >Invoice Date</th>
                    <th >Name vendor</th>
                    <th >Destination Sent</th>
                    <th>Description reject</th>
                    <th >Date send</th>
                    <th >Check date</th>
                    <th >File</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($documents as $doc)
                    <tr class="{{$doc->status == 'waiting' ? '' : ($doc->status == 'accepted' ? 'bg-success p-2 text-white bg-opacity-25"' : 'bg-danger p-2 text-white bg-opacity-25"')}}">
                        <td>{{$loop->iteration}}</td>
                        <td>{{$doc->sender}}</td>
                        <td>{{$doc->no_purchase_other}}</td>
                        <td>{{$doc->no_request}}</td>
                        <td>{{$doc->tanggal_invoice}}</td>
                        <td>{{$doc->nama_vendor}}</td>
                        <td>{{$doc->destination_sent}}</td>
                        <td>{{$doc->description_reject}}</td>
                        <td>{{$doc->date_send}}</td>
                        <td>{{$doc->date_Received}}</td>
                        <td>
                            <a href="{{url('/view',$doc->id)}}">{{$doc->file}}</a>
                        </td>
                        <td class="text-light">
                            <a href="/dokument-delete/{{$doc->slug}}" class="btn btn-danger me-2"><i class="bi bi-trash3-fill"></i></a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    
@endif
<script>
    $(function(e){

        $("#select_all_ids").click(function(){
            $('.checkbox_ids').prop('checked',$(this).prop('cheked'));
        });

        $('#deleteAllSelectRecord').click(function(e){
            e.preventDefault();
            var all_ids = [];
            $('input:checkbox[name=ids]:checked').each(function(){
                all_ids.push($(this).val());
            });

            $.ajax({
                url:"",
                type:"DELETE",
                data:{
                    ids:all_ids,
                    _token:'{{ csrf_token() }}'
                },
                success:function(response){
                    $.each(all_ids,function(key,val)){
                        $('#documents_ids'+val).remove();
                    }
                }
                
            });

        });
    });
</script>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
</body>
</html>
@endsection