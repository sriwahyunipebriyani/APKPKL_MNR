@extends('layouts.layoutMain')
@section('tema','dashboard')
@section('tampilan')
@section('content2')
    <h2 class="mt-2">Welcome, {{Auth::user()->username}} at archive data <i class="bi bi-emoji-laughing-fill"></i></h2>
    {{-- halaman membuat card --}}
    <div class="row mt-4">
        <div class="col-lg-4 mt-3">
            <div class="card-data"style="background: #CDC9C3;">
                <div class="row" >
                    <div class="col-6" ><i class="bi bi-journal-bookmark-fill"></i>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">Document</div>
                        <div class="card-child">{{$doc_count}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4  mt-3">
            <div class="card-data" style="background: #fbf7f0;">
                <div class="row">
                    <div class="col-6"><i class="bi bi-list-ul"></i>
                    </div>
                    <div class="col-6  d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">category</div>
                        <div class="card-child">{{$category_count}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mt-3">
            <div class="card-data" style="background: #D9E4DD;">
                <div class="row" >
                    <div class="col-6"><i class="bi bi-people-fill"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">Users</div>
                        <div class="card-child">{{$user_count}}</div>
                    </div>
                </div>
            </div>
        </div>    
        {{-- rent log dokument --}}
        <div class="mt-4 p-2"><h5>Documents list <i class="bi bi-files"></i></h5></div>
                <table class="table mt-1">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th>Sender</th>
                            <th>No PO</th>
                            <th>No PR</th>
                            <th>Invoice date</th>
                            <th>name vendor</th>
                            <th>Destination Sent</th>
                            <th>Description</th>
                            <th>Date send</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody >
                        @foreach ($documents as $item )
                            <tr class="{{$item->status == 'waiting' ? '' : ($item->status == 'accepted' ? 'bg-success text-white' : 'bg-danger text-white')}}" id="plk">
                                <td>{{ $loop->iteration}}</td>
                                <td>{{$item->sender}}</td>
                                <td>{{$item->no_purchase_other}}</td>
                                <td>{{$item->no_request}}</td>
                                <td>{{$item->tanggal_invoice}}</td>
                                <td>{{$item->nama_vendor}}</td>
                                <td>{{$item->destination_sent}}</td>
                                <td>{{$item->keterangan_pembelian}}</td>
                                <td>{{$item->date_send}}</td>
                                <td>{{$item->status}}</td>
                            </tr>
                        @endforeach
                    
                    </tbody>
                </table>
            


    </div>
@endsection