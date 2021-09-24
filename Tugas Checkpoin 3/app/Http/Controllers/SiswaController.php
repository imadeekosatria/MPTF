<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function siswa()
    {
        $siswa = DB::table('siswa')->get();

        return view('list-siswa',[
            "siswa" => $siswa,
            "title" => "Daftar Siswa"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/tambah-siswa', [
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
            'nama' =>'required',
            'kelas' => 'required',
            'no_hp' => 'required|unique:siswa',
            'alamat' =>'required',
            'gender' => 'required'
        ]);
        $siswa = new Siswa;
        $siswa->nama_siswa = $request->nama;
        $siswa->kelas = $request->kelas;
        $siswa->no_hp = $request->no_hp;
        $siswa->gender = $request->gender;
        $siswa->alamat = $request->alamat;

        $siswa->save();
        return redirect('/siswa')->with('status', 'Data berhasil ditambah');
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
     * @param  App\Models\Siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        return view('/edit-siswa', compact('siswa'), [
            'title' => "Edit Data Siswa"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nama' =>'required',
            'kelas' => 'required',
            'nomor' => 'required',
            'alamat' =>'required',
            'gender' => 'required'
        ]);
        Siswa::where('id', $siswa->id)
        ->update([
            'nama_siswa' => $request->nama,
            'kelas' => $request->kelas,
            'no_hp' => $request->nomor,
            'gender' => $request->gender,
            'alamat' => $request->alamat
        ]);

        return redirect('/siswa')->with('status','Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        Siswa::destroy($siswa->id);
        return redirect('/siswa')->with('status', 'Data berhasil hapus');
    }
}
