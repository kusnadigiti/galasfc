<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Data Barang</title>
</head>
<body>
  <h3 >Report Data Barang</h3>
</hr>
<table style="width:100%">
    <thead>
        <tr>
            <td bgcolor="yellow" width="5%">No</td>
            <td bgcolor="yellow">Nama Barang</td>
            <td bgcolor="yellow">Harga</td>
            <td bgcolor="yellow">Stok</td>
            <td bgcolor="yellow"> Gambar</td>
        </tr>
    </thead>
<tbody>
@foreach($report_brg as  $row)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$row->nm_brg}}</td>
                        <td>{{$row->harga}}</td>
                        <td>{{$row->stok}}</td>
                        <td>{{$row->gambar}}</td>
                    </tr>
                    @endforeach
</tbody>
</table>
<p align="right">
Date : {{$row->created_at}} </br>
Personal In Charge</br>

@if(Auth::check())
<span class="hidden-xs" fontsize= 15 >{{ Auth::user()->level}}</span>
@endif</br>
</br>

</br>
</br>
 @if(Auth::check())
<span class="hidden-xs">({{ Auth::user()->name}})</span>
@endif
</body>
</html>
