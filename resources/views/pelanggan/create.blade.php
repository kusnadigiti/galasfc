@extends('admin.admin_master')
@section('title')
Data Pelanggan
@endsection

@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title" ><i class="fas fa-users"></i>    Form Tambah Data Pelanggan </h3> 
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('pelanggan.store') }}" method="post" class="form-horizontal">
                        @csrf
                <div class="card-body">

                  <div class="form-group">
                  <label  class="col-sm-2 label-control">Nama</label>
                  <input type="text" REQUIRED="true"class="form-control" placeholder="Enter Name" name="nama" value="{{ old('name')}}">
                  </div>

                  <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email"name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>

                  <div class="form-group">
                  <label  class="col-sm-2 label-control">Telpon</label>
                  <input type="text" REQUIRED="true"class="form-control" placeholder="Enter Telpon" name="telpon" value="{{ old('telpon')}}">
                  </div>

                  <div class="form-group">
                  <label  class="col-sm-8 label-control">Jenis Kelamin</label>
                        <select name="level" class="form-control">
                          <option value="pria">Pria</option>
                          <option value="wanita">Wanita</option>
                        </select>
                    </div>

                    <div class="form-group">
                  <label  class="col-sm-2 label-control">Alamat</label>
                  <input type="text" REQUIRED="true"class="form-control" placeholder="Enter Alamat" name="alamat" value="{{ old('alamat')}}">
                  </div>


                <div class="card-footer">
                <div class="box-footer">
                                <button type = "submit" name="tombol" class="btn btn-success pull-right">Save</button>
                                <a href="{{ route('user.index') }}" class="btn btn-danger float-right">Cancel</a>
                            </div>
                </div>
              </form>
            </div>

        </div>
    </div>
</div>


@endsection