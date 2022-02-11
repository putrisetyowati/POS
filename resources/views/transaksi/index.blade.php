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
                <h6 class="m-0 font-weight-bold text-primary">Input Transaksi</h6>
            </div>
            <div class="card-body">
                <form action="/masuk/sementara" method="post">
                @csrf
                    <font color="blue">Kode Transaksi : A1</font>
                    <input type="hidden" name="kode_transaksi" value="">
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

                        <div class="col-md-4">
                            <label for="">Nama Barang</label>
                            <input type="text" id="nama" name="nama_barang" class="form-control" required>
                        </div>

                        <div class="col-md-4">
                            <label for="">Harga Barang</label>
                            <input type="text" id="harga" readonly name="harga" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">Jumlah</label>
                            <input type="text" name="jumlah_beli" class="form-control" required>
                        </div>
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-success" value="Submit">
                        </div>
                    </div>
                 </form>
            </div>
            
        </div>
    </div>
    <div class="col-md-8">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Transaksi</h6>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th class="td">Barang</th>
                        <th class="td">Jumlah</th>
                        <th class="td">Harga</th>
                        <th class="td">Total</th>
                    </tr>
                   
                    <tr>
                        <td class="td">Susu</td>
                        <td class="td">10</td>
                        <td class="td">Rp 5.000</td>
                        <td class="td">Rp 50.000</td>
                    </tr>
                   
                    <tr>
                        <td colspan="3" class="td" style="text-align:right">Total Harga : </td>
                        <td class="td">Rp 50.000</td>
                        <input type="hidden" id="jumlah" value="">

                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow mb-4">
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
        </div>
    </div>
</div>


@endsection
