<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PDF;


class ReportUserController extends Controller
{
    public function index()
    {
        $user = User::orderBy('created_at','DESC')->simplePaginate(10);
        return view('reportuser.index',compact('user'));
       
    }

    public function cetak_user()
    {
        $R_user = User::orderBy('created_at','DESC')->get();
        $pdf = PDF::loadview('reportuser.lapuser_pdf', compact('R_user'));
        return $pdf->stream();
    }

    
}
