@extends('admin.admin_master')
@section('title')
Data Barang
@endsection

@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-box"></i> Form Tambah Data Barang</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('barang.store') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Barang</label>
                    <input type="text" name="nm_brg"class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Barang">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Harga</label>
                    <input type="number" name="harga" class="form-control" id="exampleInputPassword1" placeholder="Masukan Harga">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Stok</label>
                    <input type="number" name="stok" class="form-control" id="exampleInputPassword1" placeholder="Masukan Stok">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File Gambar</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="gambar"class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append"> 
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  

                <div class="card-footer">
                <div class="box-footer">
                                <button type = "submit" name="tombol" class="btn btn-success pull-right">Save</button>
                                <a href="{{ route('barang.index') }}" class="btn btn-danger float-right">Cancel</a>
                            </div>
                </div>
              </form>
            </div>

        </div>
    </div>
</div>


@endsection