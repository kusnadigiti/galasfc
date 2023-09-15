@extends('admin.admin_master')
@section('title')
Data pelanggan
@endsection

@section('admin')
<section class="content">
        <div class="colum">
          <div class="col-md-12">
                     <div class="box-header with-border">
                     @if(Request::get('keyword'))
                    <a class="btn btn-app bg-info"href="{{ route('pelanggan.index')}}" >
                  <i class="fas fa-recycle"></i> Reset</a>  
                @else
                <a class="btn btn-app bg-success"href="{{ route('pelanggan.create')}}" >
                  <i class="fas fa-plus"></i> Add</a>     
                @endif
                <div class="row">
                <div class="col-md-3 offset-md-9">
                    <form method="get" action="{{route('pelanggan.index')}}">
                        <div class="input-group">
                            <input type="search" class="form-control form-control-lg" placeholder="Search by name" id="keyword" name="keyword" value="{{Request::get('nama')}}">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-lg btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
</div>
@if (Request::get('keyword'))
<div class="alert alert-info alert-block">
Hasil pencarian user dengan keyword: <b>{{Request::get('keyword')}}</b>
</div>
@endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jenis Kelamin</th>
                        <th>Telpon </th>
                        <th>Alamat </th>
                        <th>Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pelanggan as  $row)
                    <tr>
                        <td>{{$loop->iteration + ($pelanggan->perpage() * ($pelanggan->currentPage()-1))}}</td>
                        <td>{{$row->nama}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->jns_klm}}</td>
                        <td>{{$row->telp}}</td>
                        <td>{{$row->alamat}}</td>
                        <td>{{$row->created_at}}</td>
                        <td>
                        <form method="post" action="{{ route('pelanggan.destroy',[$row->id]) }}" onsubmit="return confirm('Apakah anda yakin akan menghapus, {{$row->nama}}?')">
                            @csrf
                            {{ method_field('DELETE') }}
                            <a class="btn btn-info" href="{{ route('pelanggan.edit',[$row->id])}}"><i class="fa fa-edit"></i></a>
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            <a class="btn btn-warning" href="{{ route('pelanggan.show',[$row->id]) }}"><i class="fa fa-eye"></i></a>
                             </form>    
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            {{$pelanggan->appends(Request::all())->links()}}

            </div>
        </div >
    </div>
</div>
</div>


@endsection
