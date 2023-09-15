@extends('admin.admin_master')
@section('title')
Report Data Barang
@endsection

@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
            <a target="_blank" href = "{{route('cetak_brg')}}" class="btn btn-danger float-left" ><i class="fas fa-print"></i> Print PDF</a>
           
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Gambar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($barang as  $row)
                    <tr>
                        <td>{{$loop->iteration }}</td>
                        <td>{{$row->nm_brg}}</td>
                        <td>{{$row->harga}}</td>
                        <td>{{$row->stok}}</td>
                        <td><img class="img-thumbnail" src="{{asset('uploads/'.$row->gambar)}}" width="50px"/></td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div >
    </div>
</div>
</div>


@endsection
