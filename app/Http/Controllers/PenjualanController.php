<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Penjualan;
use App\Controllers\HomeController;
use Validator;
use Alert;


class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    {
        $penjualan = Penjualan::orderBy('total','asc')->simplePaginate(3);
        $filterKeyword = $request->get('keyword');
        if($filterKeyword)
        {
            $penjualan = Penjualan::where('total','LIKE',"%$filterKeyword%")->paginate(1);
        }
        return view('penjualan.index',compact('penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $data = Penjualan::findOrFail($id);
        $data->delete();
        alert()->success('Hapus','Data Terhapus');
        // toast('Data Terhapus','success');
        return redirect()->route('penjualan.index')->with('status','penjualan berhasil di hapus'); 
    }
}
