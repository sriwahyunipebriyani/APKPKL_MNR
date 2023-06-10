@extends('layouts.layoutMain')
@section('tema', 'Deleted category')
@section('tampilan')
@section('content2')
    <div class="mt-2"><h3>Category deleted</h3></div>
    <div class="mt-4 d-flex justify-content-end">
        <a href="Category" class="btn btn-secondary">Back</a>
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
        @foreach ( $deletedCategory as $item)
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $item->name}}</td>
                <td>
                    <button type="button" class="btn btn-outline-primary"> <a href="category-restore/{{$item->slug}}">restor</a></button>
                
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
    
@endsection