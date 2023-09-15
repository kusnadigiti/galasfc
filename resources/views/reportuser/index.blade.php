@extends('admin.admin_master')
@section('title')
Report Data user
@endsection

@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
            <a target="_blank" href = "{{route('cetak_user')}}" class="btn btn-danger float-left" ><i class="fas fa-print"></i> Print PDF</a>
           
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as  $row)
                    <tr>
                        <td>{{$loop->iteration + ($user->perpage() * ($user->currentPage()-1))}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->level}}</td>
                        <td>{{$row->created_at}}</td>
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
