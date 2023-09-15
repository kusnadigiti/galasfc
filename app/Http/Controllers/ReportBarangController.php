<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use PDF;


class ReportBarangController extends Controller
{
    public function index()
    {
        $barang = Barang::orderBy('created_at','DESC')->simplePaginate(10);
        return view('reportbarang.index',compact('barang'));
       
    }

    public function cetak_brg()
    {
        $report_brg = Barang::orderBy('created_at','DESC')->get();
        $pdf = PDF::loadview('reportbarang.lapbarang_pdf', compact('report_brg'));
        return $pdf->stream();
    }
}
