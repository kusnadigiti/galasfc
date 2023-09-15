@extends('admin.admin_master')
@section('title')
Data User
@endsection

@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title" ><i class="fas fa-user"></i>    Form Tambah Data User </h3> 
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('user.store') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                <div class="card-body">
                  <div class="form-group">
                  <label  class="col-sm-2 label-control">Name</label>
                                <div class="col-sm-12">
                                <input type="text" REQUIRED="true"class="form-control" placeholder="Enter Name" name="name" value="{{ old('name')}}">
                  </div>
                  <div class="form-group">
                  <label  class="col-sm-2 label-control">Username</label>
                                <div class="col-sm-12">
                                <input type="text" class="form-control" REQUIRED="true" placeholder="Enter Username" name="username" value="{{ old('username')}}">
                  </div>
                  <div class="form-group">
                  <label  class="col-sm-2 label-control">Email</label>
                                <div class="col-sm-12">
                                <input type="text" class="form-control" REQUIRED="true" placeholder="Enter Email"  name="email" value="{{ old('email')}}">
                  </div>
                  <div class="form-group">
                  <label  class="col-sm-2 label-control">Password</label>
                                <div class="col-sm-12">
                                <input type="password" class="form-control" REQUIRED="true" placeholder="Enter Password"  name="password" value="{{ old('password')}}">
                  </div>
                  <div class="form-group">
                  <label  class="col-sm-2 label-control">level</label>
                                <div class="col-sm-12">
                               <select name="level" class="form-control">
                                <option value="admin">Admin</option>
                                <option value="staff">Staff</option>
                                </select>


                    </div>
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