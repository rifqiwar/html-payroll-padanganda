<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = Karyawan::all();
        return view('admin.pages.karyawan.index',compact('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $karyawan = new Karyawan();
        $karyawan->nik = $request->nik;
        $karyawan->nama = $request->nama;
        $karyawan->jenis_kelamin = $request->jenis_kelamin;
        $karyawan->tempat_lahir = $request->tempat_lahir;
        $karyawan->tanggal_lahir = $request->tanggal_lahir;
        $karyawan->agama = $request->agama;
        $karyawan->alamat = $request->alamat;
        $karyawan->foto = $request->foto ?? 'foto.jpg';
        $karyawan->golongan_id = $request->golongan;
        $karyawan->save();
        return redirect()->route('karyawan.index')->with('success', 'Berhasil menambahkan karyawan');
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
