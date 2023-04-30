<?php

namespace App\Http\Controllers;

use App\Models\profil;
use Illuminate\Http\Request;

class websiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 3;
        if(strlen($katakunci)){
            $data = profil::where('nama_lengkap','like',"%$katakunci%")
                    ->orWhere('jurusan','like',"%$katakunci%")
                    ->paginate($jumlahbaris);
        }else{
            $data = profil::orderBy('nama_lengkap','desc')->paginate(3);
        }
        return view('cover.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cover.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=[
            'nama_lengkap'=>$request->nama,
            'no_handphone'=>$request->noHP,
            'alamat'=>$request->alamat,
            'pendidikan'=>$request->pendidikan,
            'jurusan'=>$request->jurusan,
        ];
        profil::create($data);
        return redirect()->to('profil')->with('success','Data added successfully !!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param int $id
     */
    public function edit($id)
    {
        $data = profil::where('nama_lengkap', $id)->first();
        return view('cover.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $data=[
            'no_handphone'=>$request->noHP,
            'alamat'=>$request->alamat,
            'pendidikan'=>$request->pendidikan,
            'jurusan'=>$request->jurusan,
        ];
        profil::where('nama_lengkap', $id)->update($data);
        return redirect()->to('profil')->with('success','Data update was successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        profil::where('nama_lengkap', $id)->delete();
        return redirect()->to('profil')->with('success','Data deleted successfully !!');
    }
}
