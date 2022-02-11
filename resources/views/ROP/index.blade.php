@extends('layouts.app')
@section('content')
<title>Transaksi | POS</title>
<style>
.table {
  border-collapse: collapse;
  width: 100%;
}

.td {
  color:black;
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}
</style>
<!-- @if( Session::get('gagal') !="")
            <div class='alert alert-danger'><center><b>{{Session::get('gagal')}}</b></center></div>
            @endif -->
<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">ROP</h6>
            </div>
            <div class="card-body">
                <form action="/masuk/sementara" method="post">
                @csrf
                    
                    <div class="row mt-2">
                        <!-- <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Masukan  Kode Barang</label>
                                <input type="text" id="id_barang" name="id_barang" class="form-control" required>
                            </div>
                        </div> -->
                        <!-- <div class="col-md-4">
                            <label for="">Nama Barang</label>
                            <input type="text" id="nama" readonly name="nama_barang"  class="form-control">
                        </div> -->
                        <div class="col-md-5">
                            <label for="">Nama Barang</label>
                            <input type="text" id="id_barang" name="nama_barang" class="form-control" required>
                        </div>
                        <div class="col-md-5">
                            <label for="">Lead Time</label>
                            <input type="text" id="LD" name="LD" class="form-control" required>
                        </div>

                        <div class="col-md-5">
                            <label for="">Rata rata Penjualan</label>
                            <input type="text" id="D" name="D" class="form-control" required>
                        </div>
                        <div class="col-md-5">
                            <label for="">Safety Stock</label>
                            <input type="text" name="SS" class="form-control" required>
                        </div>
                        
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-success" value="Submit">
                        </div>
                    </div>
                 </form>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Hasil ROP</h6>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th class="td">Nama Barang</th>
                        <th class="td">Lead Time</th>
                        <th class="td">Rata rata Penjualan</th>
                        <th class="td">Savety Stock</th>
                        <th class="td">Hasil</th>
                        <th class="td"></th>
                    </tr>
                   
                    <tr>
                        <td class="td">Susu</td>
                        <td class="td">2</td>
                        <td class="td">70</td>
                        <td class="td">20</td>
                        <td class="td">152</td>
                        <td><a href="#" class="btn btn-primary btn-sm ml-2">Delete</a></td>
                    </tr>
                   
                    
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <!-- <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Pembayaran</h6>
            </div>
            <div class="card-body">
                <form action="/masuk/semua" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Bayar</label>
                        <input type="hidden" name="kode_transaksi_kembalian" value="">
                        <input type="number" id="bayar" onkeyup="hitung2();" name="bayar" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Kembalian</label>
                        <input type="number" id="kembalian" name="kembalian" readonly class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Submit">
                    </div>
                </form>
            </div>
        </div> -->
    </div>
</div>


@endsection
