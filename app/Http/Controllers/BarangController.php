<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Barang;
use App\Controllers\HomeController;
use Validator;
use Storage;
// use Alert;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $barang = Barang::orderBy('nm_brg','asc')->simplePaginate(3);
        $filterKeyword = $request->get('keyword');
        if($filterKeyword)
        {
            $barang = Barang::where('nm_brg','LIKE',"%$filterKeyword%")->paginate(1);
        }
        return view('barang.index',compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = Barang::all();
         return view('barang.create', compact('barang'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input,[
            'nm_brg'=>'required|max:150',
            'harga'=>'required|numeric',
            'stok'=>'required|numeric',
            'gambar'=>'required|image|mimes:jpeg,jpg,png|max:2048'
        ]);

        if($validator->fails())
        {
            return redirect()->route('barang.create')->withInput()->withErrors($validator);

        }

        $gambar=$request->file('gambar');
        $extention=$gambar->getClientOriginalExtension();

        if($request->file('gambar')->isValid()){
            $namaFoto = "barang/".date('YmdHis').".".$extention;
            $upload_path = 'uploads/barang';
            $request->file('gambar')->move($upload_path, $namaFoto);
            $input['gambar'] = $namaFoto;
        }

        Barang::create($input);
        return redirect()->route('barang.index')->with('success','barang Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.show',compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.edit',compact('barang'));
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
        $barang = Barang::findOrFail($id);
        $input = $request->all();
        $validasi = Validator::make($input,[
            'nm_brg'=>'required|max:150',
            'harga'=>'required|numeric',
            'stok'=>'required|numeric',
            'gambar'=>'sometimes|nullable|image|mimes:jpeg,jpg,png|max:2048'
        ]);

        if($validasi->fails())
        {
            return redirect()->route('barang.edit',[$id])->withInput()->withErrors($validasi);

        }

        if($request->hasFile('gambar')){
            if($request->file('gambar')->isValid())
            {
                Storage::disk('upload')->delete($barang->gambar);
                $gambar=$request->file('gambar');

                $extention=$gambar->getClientOriginalExtension();
                $namaFoto = "barang/".date('YmdHis').".".$extention;
                $upload_path = 'uploads/barang';
                $request->file('gambar')->move($upload_path, $namaFoto);
                $input['gambar'] = $namaFoto;
            }
        }

        $barang->update($input);
        return redirect()->route('barang.index')->with('success','barang Berhasil DiEdit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Barang::findOrFail($id);
        $data->delete();
         alert()->success('Hapus','Data Terhapus');
        // toast('Data Terhapus','success');
        return redirect()->route('barang.index')->with('status','barang berhasil di hapus');
    }
}
