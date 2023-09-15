@extends('admin.admin_master')
@section('title')
Edit Data Barang
@endsection

@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Tambah Data Barang</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('barang.update',[$barang->id]) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
              @csrf
                        {{ method_field('PUT') }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Barang</label>
                    <input type="text" name="nm_brg"class="form-control" id="exampleInputEmail1" value="{{ $barang->nm_brg }}" placeholder="Masukan Nama Barang">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Harga</label>
                    <input type="number" name="harga" value="{{$barang->harga }}" class="form-control" id="exampleInputPassword1" placeholder="Masukan Harga">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Stok</label>
                    <input type="number" name="stok" value="{{$barang->stok }}"  class="form-control" id="exampleInputPassword1" placeholder="Masukan Stok">
                  </div>
                  
                  <div class="form-group" align="center">
                    <label for="exampleInputFile"> <img class="img-thumbnail" src="{{asset('uploads/'.$barang->gambar)}}" width="100px"/></label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file"  value="{{$barang->gambar }}"  name="gambar"class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile"></label>
                      </div>
                      <div class="input-group-append"> 
                        <span class="input-group-text">Edit Gambar</span>
                      </div>
                    </div>
                  </div>
                  

                <div class="card-footer">
                <div class="box-footer">
                                <button type = "submit" name="tombol" class="btn btn-info pull-right">Edit</button>
                                <a href="{{ route('barang.index') }}" class="btn btn-danger float-right">Cancel</a>
                            </div>
                </div>
              </form>
            </div>

        </div>
    </div>
</div>


@endsection