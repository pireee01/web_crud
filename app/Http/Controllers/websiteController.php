<?php

namespace App\Http\Controllers;

use App\Models\profil;
use Illuminate\Http\Request;

class websiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cover.index');
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
        $request->validate([
            'nama_lengkap'=>'required',
            'no_handphone'=>'required',
            'alamat'=>'required',
            'pendidikan'=>'required',
            'jurusan'=>'required',
        ]);
        $data=[
            'nama_lengkap'=>$request->nama,
            'no_handphone'=>$request->noHP,
            'alamat'=>$request->alamat,
            'pendidikan'=>$request->pendidikan,
            'jurusan'=>$request->jurusan,
        ];
        profil::create($data);
        return 'Hello World !!';
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
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
