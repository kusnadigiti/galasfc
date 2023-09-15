<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Pelanggan;
use App\Controllers\HomeController;
use Validator;
use Alert;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pelanggan = Pelanggan::orderBy('nama','asc')->simplePaginate(3);
        $filterKeyword = $request->get('keyword');
        if($filterKeyword)
        {
            $pelanggan = Pelanggan::where('nama','LIKE',"%$filterKeyword%")->paginate(1);
        }
        return view('pelanggan.index',compact('pelanggan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelanggan.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $validasi = Validator::make($data,[
            'nama'=>'required|max:255',
            'email'=>'required|email|max:255',
        ]);
        if($validasi->fails())
        {
            return redirect()->route('pelanggan.create')->withInput()->withErrors($validasi);
        }

        pelanggan::create($data);
        alert()->success('Simpan','Data Sudah Tersimpan');
        // toast('Data Tersimpan','success');
        return redirect()->route('pelanggan.index')->with('success','Pelanggan Berhasil Ditambahkan');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.show',compact('pelanggan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.edit',compact('pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pelanggan::findOrFail($id);
        $data->delete();
        alert()->success('Hapus','Data Terhapus');
        // toast('Data Terhapus','success');
        return redirect()->route('pelanggan.index')->with('status','Pelanggan berhasil di hapus'); 
    }
}
