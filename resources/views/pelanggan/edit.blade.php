@extends('admin.admin_master')
@section('title')
Edit Pelanggan
@endsection

@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
             @include('alert.error')
            </div>
            <div class="box-body">
            <form action="{{ route('pelanggan.store') }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label  class="col-sm-2 label-control">Name</label>
                                <div class="col-sm-12">
                                <input type="text" class="form-control" placeholder="Enter Name" name="nama" value="{{ $pelanggan->nama }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label  class="col-sm-2 label-control">Email</label>
                                <div class="col-sm-12">
                                <input type="text" class="form-control"  placeholder="Enter Email" name="email" value="{{ $pelanggan->email }}">
                                </div>
                            </div>
                        
                            </div>
                            <div class="box-footer">
                                <button type = "submit" name="tombol" class="btn btn-info pull-right">Save</button>
                                <a href="{{ route('pelanggan.index') }}" class="btn btn-danger">Cancel</a>
                            </div>
            </div>
        </div>
    </div>
</div>


@endsection