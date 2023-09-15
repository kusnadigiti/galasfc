@extends('admin.admin_master')
@section('title')
View Pelanggan 
@endsection

@section('admin')
<section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box">
                <a class="btn btn-app bg-info"href="{{ route('pelanggan.index')}}" >
                  <i class="fas fa-angle-double-left"></i> Back</a>    
            </div>
            <div class="box-body">
              <table class="table table-bordered"> 
                   <tr>
                       <td>Nama</td>
                       <td>:</td>
                       <td>{{ $pelanggan ->nama }}</td>
                   </tr>
              
                   <tr>
                       <td>Email</td>
                       <td>:</td>
                       <td>{{ $pelanggan ->email }}</td>
                   </tr>

            </table>
            </div>
        </div>
    </div>
</div>


@endsection