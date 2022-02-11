@extends('layouts.app')
@section('content')
<title>Data Laporan | POS</title>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Laporan</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="dataTable" class="table table-bordered" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Transaksi</th>
                        <th>Jumlah Bayar</th>
                        <th>Kembalian</th>
                        <th>Tanggal</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                  
                    <tr>
                        <td>1</td>
                        <td>A1</td>
                        <td>Rp 100.000</td>
                        <td>Rp 50.000</td>
                        <td>07/02/2022</td>
                        <td><a href="#" class="btn btn-primary btn-sm ml-2">View</a>
                            <a href="#" class="btn btn-primary btn-sm ml-2">Delete</a>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>



@endsection
