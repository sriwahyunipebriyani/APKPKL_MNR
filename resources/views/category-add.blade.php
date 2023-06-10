@extends('layouts.layoutMain')
@section('tema', 'Add Category')
@section('tampilan')
@section('content2')
{{-- 
<div class="mb-3 w-50"> --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card w-75">
        <h4 class="card-header">Add document delivery category</h4>
        <div class="card-body">
            <form action="category-add" method="post">
                @csrf
                <div>
                    <label for="name" class="form-label"><b>Name</b></label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="category Name">
                </div>
                <div class="mt-3">
                    <button class="btn btn-success" type="submit">save</button>
                </div>
            </form>
        </div>
    </div>

{{-- </div> --}}
<script>

</script>
@endsection