@extends('layouts.layoutMain')
@section('tema','documentAdd')
@section('tampilan')
@section('content2')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

    <div class="card w-75 " id="card">
        <form action="document-add" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-header text-center">
                <h5>Form Document</h5>
            </div>
            <div class="card-body">
                <div class="mt-2" >
                    <label for="no_purchase_other" class="form-label">No PO</label>
                    <input type="no" name="no_purchase_other" id="no_purchase_other" class="form-control w-50" value="{{ old('no_purchase_other')}}" placeholder="Nomor purchase order" required>
                </div>
                <div class="mt-2">
                    <label for="no_request" class="form-label">No PR</label>
                    <input type="no" name="no_request" id="no_request" class="form-control w-50" value="{{ old('no_request')}}" placeholder="No purchase request" required>
                </div>
                
                <div class="form-floating mt-2">
                    <label for="keterangan">description</label>
                    <textarea class="form-control " placeholder="purchase information" v name="keterangan_pembelian" id="keterangan pembelian	" style="height: 100px" ></textarea>
                </div>
                <div class="form-group mt-2">
                    <label> Invoice date</label>
                    <input name="tanggal_invoice" class="form-control" value="{{ old('tanggal_invoice')}}" type="date">
                </div>
                <div class="form-group mt-2">
                    <label>Name Vendor</label>
                    <input name="nama_vendor" class="form-control " value="{{ old('nama_vendor') }}" required>
                </div>
                <div class="form-group mt-2">
                    <label>Name sender</label>
                    <input name="sender" class="form-control" value="{{Auth::user()->username}} " required >
                {{-- </div>
                <div class="form-group mt-2">
                    <label>recipient's name</label>
                    <input name="recipients" class="form-control " value="{{ old('recipients') }}" required>
                </div> --}}
                {{-- <div class="form-group">
                    <label>sent date</label>
                    <input name="date_send" class="form-control w-75" type="date">
                </div>
                <div class="form-group">
                    <label>date Received</label>
                    <input name="date_Received" class="form-control w-75" type="date">
                </div> --}}
                <div class="mt-2">
                    <label for="destination_sent" class="form-label">destination sent</label>
                    <select  name="destination_sent" id="destination_sent" placeholder="Choose Category" class="form-control select-multiple" >
                        <option value=""></option>
                        @foreach ($categories as $item)
                            <option value="{{$item->name}}">{{$item->name}}</option>             
                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-2">
                    <label for="dataFile" class="form-label">File</label>
                    <input type="file" name="dataFile" class="form-control " value="{{ old('dataFile')}}" >
                    <label class="text-danger">The file must be in pdf format</label>
                </div>
                {{-- <div>
                    <label for="status">status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="status"></option>
                    </select>
                </div> --}}
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary">send</button>
                </div>
        </div>

        {{-- untuk membuka file pdf --}}
        {{-- <iframe src="demo_iframe.htm" height="200" width="300" title="Iframe Example"></iframe> --}}
        <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            // In your Javascript (external .js resource or <script> tag)
            $(document).ready(function() {
                $('.select-multiple').select2();
            });
        </script>
    </div> 
@endsection