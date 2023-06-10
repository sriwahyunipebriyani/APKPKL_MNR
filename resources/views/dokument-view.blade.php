@extends('layouts.mainLayout')
@section('title', 'view document')
@section('content')
    
<div class="mt-4 d-flex justify-content-end">
<button class="btn btn-secondary" type="button" onclick="window.location='/dokument'">&laquo; Back </button>
</div>

<div class="card w-100 mt-4" id="card">
                    <div class="col-sm-12" >
                        <div class="card-header text-center">
                            View Document
                        </div>
                        <div class="card-body">
                            <div class="table table-bordered">
                            
                                <div class="row">
                                    <div class="col-sm-6">
                                    <div class="card">
                                    
                                        <div class="card-body">
                                            
                                            <tr>
                                                <th width="100px">No PO</th>
                                                <th width="30px">:</th>
                                                <th>{{$documents->no_purchase_other}}</th>
                                            </tr><br><br>
                                            <tr>
                                                <th width="100px">No PR</th>
                                                <th width="30px">:</th>
                                                <th>{{$documents->no_request}}</th>
                                            </tr><br><br>
                                            <tr>
                                                <th width="100px">keterangan</th>
                                                <th width="30px">:</th>
                                                <th>{{$documents->keterangan_pembelian}}</th>
                                            </tr><br><br>
                                            <tr>
                                                <th width="100px">invoice date</th>
                                                <th width="30px">:</th>
                                                <th>{{$documents->tanggal_invoice}}</th>
                                            </tr><br><br>
                                            <tr>
                                                <th width="100px">vendor name</th>
                                                <th width="30px">:</th>
                                                <th>{{$documents->nama_vendor}}</th>
                                            </tr><br><br>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card">
                                        <div class="card-body">
                                            <tr>
                                                <th width="120px">sender</th>
                                                <th width="30px">:</th>
                                                <th>{{$documents->sender}}</th>
                                            </tr><br><br>
                                            <tr>
                                                <th width="100px">recipients</th>
                                                <th width="30px">:</th>
                                                <th>{{$documents->recipients}}</th>
                                            </tr><br><br>
                                            <tr>
                                                <th width="100px">Date Send</th>
                                                <th width="30px">:</th>
                                                <th>{{$documents->date_send}}</th>
                                            </tr><br><br>
                                            <tr>
                                                <th width="100px">Date Received</th>
                                                <th width="30px">:</th>
                                                <th>{{$documents->date_Received}}</th>
                                            </tr><br><br>
                                            <tr>
                                                <th width="100px">status</th>
                                                <th width="30px">:</th>
                                                <th>{{$documents->status}}</th>
                                            </tr><br><br>
                                        </div>
                                        </div>
                                    </div>
                                    {{-- <div class="mt-4 d-flex justify-content-end">
                                        <a href="dokument" class="btn btn-secondary">back</a>
                                    </div> --}}
                                    </div>
                                    <div class="mt-3 d-flex justify-content-center">
                                        <iframe src="/storage/file/{{$documents->file}}" width="100%" height="500"></iframe><br>
                                    
                                    </div>
                            </div>
                        </div>
                    </div>
</div>
@endsection

