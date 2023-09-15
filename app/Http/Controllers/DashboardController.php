<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Barang;
use App\Models\Pelanggan;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::count();
        $pelanggan = Pelanggan::count();
        $barang = Barang::count();
        return view('dashboard', compact('user','pelanggan','barang'));
    }

}

