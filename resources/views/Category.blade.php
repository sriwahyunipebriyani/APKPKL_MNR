@extends('layouts.layoutMain')
@section('tema', 'kategory')
@section('tampilan')
@section('content2')
    <div class="mt-2"><h3>Category list</h3></div>
<div class="mt-4 d-flex justify-content-end">
    <a href="category-add" class="btn btn-secondary m-2">Add Data</a>
    <a href="category-deleted" class="btn btn-outline-danger m-2">Deleted Data</a>
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
        <th scope="col">name </th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach ( $categories as $item)
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $item->name}}</td>
                <td>
                    <button type="button" class="btn btn-outline-primary"> <a href="category-edit/{{$item->slug}}">edit</a></button>
                    <button type="button" class="btn btn-outline-danger"><a href="category-delete/{{$item->slug}}">Delete</a></button>
                
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
    
@endsection