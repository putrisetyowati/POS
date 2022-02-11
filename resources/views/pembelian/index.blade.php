@extends('layouts.app')
@section('content')
<title>Pembelian | POS</title>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pasok</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <!-- @if( Session::get('masuk') !="")
            <div class='alert alert-success'><center><b>{{Session::get('masuk')}}</b></center></div>
            @endif
            @if( Session::get('update') !="")
            <div class='alert alert-success'><center><b>{{Session::get('update')}}</b></center></div>
            @endif
            @if( Session::get('delete') !="")
            <div class='alert alert-success'><center><b>{{Session::get('delete')}}</b></center></div>
            @endif -->
            <button class="btn btn-success" data-toggle="modal" data-target="#tambah">Tambah Data</button>
            <br>
            <br>
            <table id="dataTable" class="table table-bordered" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Jumlah Pasok</th>
                        <th>Nama Pemasok</th>
                        <th>Waktu Pasok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td>1</td>
                        <td>Susu</td>
                        <td>70 Dus</td>
                        <td>Toko Berkah</td>
                        <td>07/02/2022</td>
                        <td><a href="#" class="btn btn-primary btn-sm ml-2">Edit</a>
                            <a href="#" class="btn btn-primary btn-sm ml-2">Delete</a>
                        </td>
                    </tr>
                 
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="tambah" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Masukan Data</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="/pasok/store" method="post">
            @csrf
          <div class="form-group">
             <div class="input_fields_wrap">
            <button class="add_field_button btn btn-primary">Tambah Fields</button>
            <table>
              <tr>
                <td>
                  <label for="">Nama Barang</label>
                  <br>
                      <select name="id_barang[]" id="" class="myselect form-control"  required>
                          <option selected disabled value="">Pilih Jenis Barang</option>
                         
                          <option value="#">Susu</option>
                    
                    </select>
                    </div>
                </td>
                <td class="pl-4">
                  <label for="">Jumlah</label>
                <input type="number" name="jumlah[]" class="form-control" required placeholder="Masukan Jumlah" required>
                </td>
              </tr>
            </table>

            </div>
            <div class="form-group">
                <label for="">Nama Pemasok</label>
                <input type="text" name="nama_pemasok" class="form-control" placeholder="Masukan Nama Pemasok" required>
            </div>

            <div class="form-group">
                <label for="">Tanggal Pasok</label>
                <input type="date" name="tanggal_pasok" class="form-control" required>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        </div>
      </div>
    </div>
  </div>




@endsection
