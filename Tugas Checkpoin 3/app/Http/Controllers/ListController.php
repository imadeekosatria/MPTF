<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Guru;

class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function guru()
    {
        $guru = DB::table('guru')->get();

        return view('list-guru',[
            "guru" => $guru,
            "title" => "Daftar Guru"
        ]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/edit-tambah', [
            "title" => "Tambah Data"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|size:5|unique:guru',
            'nama' =>'required',
            'mapel' => 'required',
            'nomor' => 'required|size:14|unique:guru',
            'alamat' =>'required',
            'gender' => 'required'
        ]);
        $guru = new Guru;
        $guru->nama_guru = $request->nama;
        $guru->nip = $request->nip;
        $guru->mapel = $request->mapel;
        $guru->no_hp = $request->nomor;
        $guru->gender = $request->gender;
        $guru->alamat = $request->alamat;

        $guru->save();
        return redirect('/guru')->with('status', 'Data berhasil ditambah');
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
        //
    }
}
