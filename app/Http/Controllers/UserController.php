<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\User;
use App\Controllers\HomeController;
use Validator;
use Alert;

class UserController extends Controller
{
   
    public function index(Request $request)
    {
        $user = User::orderBy('name','asc')->simplePaginate(2);
        $filterKeyword = $request->get('keyword');
        if($filterKeyword)
        {
            $user = User::where('name','LIKE',"%$filterKeyword%")->paginate(1);
        }
        return view('user.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');

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
            'name'=>'required|max:255',
            'email'=>'required|email|max:255|unique:users',
            'username'=>'required|max:100|unique:users',  
            'password'=>'required|min:6',
            'level'=>'required',
        ]);
        if($validasi->fails())
        {
            return redirect()->route('user.create')->withInput()->withErrors($validasi);
        }

        $data['password'] = bcrypt($data['password']);
        User::create($data);
        alert()->success('Simpan','Data Sudah Tersimpan');
        // toast('Data Tersimpan','success');
        return redirect()->route('user.index')->with('success','User Berhasil Ditambahkan');
        
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit',compact('user'));
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
            $user = User::findOrFail($id);
            $data = $request->all();
            $validasi = Validator::make($data,[
             'name'=>'required|max:255',
                    'email'=>'required|email|max:255|unique:users,email,'.$id,
                    'username'=>'required|max:100|unique:users,username,'.$id, 
                    'password'=>'sometimes|nullable|min:6'
                ]);
                if($validasi->fails())
                {
                    return redirect()->route('user.create',[$id])->withErrors($validasi);
                }
        
              if($request->input('password'))
             {
                 $data['password'] = bcrypt($data['password']);
            }
              else
              {
                   $data = Arr::except($data,['password']);
              }
               $user->update($data);
                alert()->success('Edit','Data Sudah Di edit');
               return redirect()->route('user.index')->with('status','user berhasil di update');
           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->delete();
        alert()->success('Hapus','Data Terhapus');
        // toast('Data Terhapus','success');
        return redirect()->route('user.index')->with('status','User berhasil di hapus'); 
    }
}
