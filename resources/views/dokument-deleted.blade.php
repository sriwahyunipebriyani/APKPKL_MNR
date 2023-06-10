@extends('layouts.layoutMain')
@section('tema', 'Deleted category')
@section('tampilan')
@section('content2')
    <div class="mt-2"><h3>Document deleted</h3></div>
    <div class="mt-4 d-flex justify-content-end">
        <a href="/dokument" class="btn btn-secondary">Back</a>
    </div>
    <div class="mt-3">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>
<table class="table mt-3" >
    <thead>
    <tr>
        <th scope="col">no</th>
        <th scope="col">sender</th>
        <th scope="col">recipients</th>
        <th scope="col">Date Send</th>
        <th scope="col">Date Received</th>
        <th scope="col">file</th>
        <th scope="col">status</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach ( $deletedDoc as $item)
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{$item->sender}}</td>
                <td>{{$item->recipients}}</td>
                <td>{{$item->date_send}}</td>
                <td>{{$item->date_Received}}</td>
                <td>{{$item->file}}</td>
                <td>{{$item->status}}</td>
                <td>
                    <button type="button" class="btn btn-outline-primary"> <a href="dokument-restore/{{$item->slug}}">restor</a></button>
                    <form action="/force-Delete/{{$item->id}}" method="post" style="display: inline;" onsubmit="return hapusdata()">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-danger" type="submit">
                        Delete
                    </button>
                    </form>
                
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
    <script>
        function hapusdata($id){
            pesan = confirm('sure to delete this document permanently?');
            if (pesan) 
                return true;
            else return false;
                
            }
        }
    </script>
@endsection