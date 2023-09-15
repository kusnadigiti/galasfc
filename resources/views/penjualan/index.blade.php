@extends('admin.admin_master')
@section('title')
Data Penjualan
@endsection

@section('admin')
<section class="content">
        <div class="colum">
          <div class="col-md-12">
                     <div class="box-header with-border">
                     @if(Request::get('keyword'))
                    <a class="btn btn-app bg-info"href="{{ route('penjualan.index')}}" >
                  <i class="fas fa-recycle"></i> Reset</a>  
                @else
                <a class="btn btn-app bg-danger"href="{{ route('penjualan.create')}}" >
                  <i class="fas fa-plus"></i> Add</a>     
                @endif
                <div class="row">
                <div class="col-md-3 offset-md-9">
                    <form method="get" action="{{route('penjualan.index')}}">
                        <div class="input-group">
                            <input type="search" class="form-control form-control-lg" placeholder="Search by name" id="keyword" name="keyword" value="{{Request::get('nm_brg')}}">
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
Hasil pencarian penjualan dengan keyword: <b>{{Request::get('keyword')}}</b>
</div>
@endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Transaksi</th>
                        <th>Total</th>
                        <th>Pelanggan</th>
                        <th>Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($penjualan as  $row)
                    <tr>
                        <td>{{$loop->iteration + ($penjualan->perpage() * ($penjualan->currentPage()-1))}}</td>
                        <td>{{$row->tgl}}</td>
                        <!-- setting method boot di Providers->AppServiceProvider -->
                        <td>@rupiah{{$row->total}}</td> 
                        <!-- pelanggan(nama model) -->
                        <td>{{$row->pelanggan->nama}}</td> 
                        <td>{{$row->created_at}}</td>
                        <td>
                        <form method="post" action="{{ route('penjualan.destroy',[$row->id]) }}" onsubmit="return confirm('Apakah anda yakin akan menghapus, {{$row->total}}?')">
                            @csrf
                            {{ method_field('DELETE') }}
                            <a class="btn btn-info" href="{{ route('penjualan.edit',[$row->id])}}"><i class="fa fa-edit"></i></a>
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            <a class="btn btn-warning" href="{{ route('penjualan.show',[$row->id]) }}"><i class="fa fa-eye"></i></a>
                             </form>    
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            {{$penjualan->appends(Request::all())->links()}}

            </div>
        </div >
    </div>
</div>
</div>


@endsection
