@extends('admin.admin_master')
@section('title')
Edit User
@endsection

@section('admin')
<div class="row">

    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
             @include('alert.error')
            </div>
            <div class="box-body">
            <form action="{{ route('user.update',[$user->id]) }}" method="post" class="form-horizontal">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="box-body">
                            <div class="form-group">
                                <label  class="col-sm-2 label-control">Nama</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control"  name="name" value="{{ $user->name }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label  class="col-sm-2 label-control">UserName</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control"  name="username" value="{{ $user->username }}">
                                </div>
                            </div>
                        
                            <div class="form-group">
                                <label  class="col-sm-2 label-control">Email</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control"  name="email" value="{{ $user->email }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label  class="col-sm-2 label-control">Password</label>
                                <div class="col-sm-10">
                                <input type="password" class="form-control"  name="password" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label  class="col-sm-2 label-control">level</label>
                                <div class="col-sm-10">
                               <select name="level" class="form-control">
                               <option value="admin" @if($user->level == "admin" ) Selected @endif>Admin</option>
                               <option value="staff" @if($user->level == "staff" ) Selected @endif>Staff</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-8">
                            <div class="box-footer">
                                <button type = "submit" name="tombol" class="btn btn-info pull-right">Update</button>
                                <a href="{{ route('user.index') }}" class="btn btn-danger">Cancel</a>    

                            </div>
            </div>
        </div>
    </div>
</div>
@endsection