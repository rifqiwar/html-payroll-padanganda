<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gaji;
use App\Models\Karyawan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->role == 'admin') {
            $data =Gaji::with('karyawan')->get();
            return view('admin.pages.gaji.index',compact('data'));
        }else{
            $get_id_karyawan = User::where('karyawan_id',$user->karyawan_id)->where('role','user')->first();
            $gaji = Gaji::with('karyawan')->where('karyawan_id',$get_id_karyawan->karyawan_id)->get();
            return view('admin.pages.gaji.for_user.index',compact('gaji'));

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $karyawan = Karyawan::all();
        return view('admin.pages.gaji.create',compact('karyawan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gaji = new Gaji();
        $gaji->karyawan_id = $request->karyawan_id;
        $gaji->jumlah_gaji = $request->jumlah_gaji;
        $gaji->jumlah_lembur = $request->jumlah_lembur;
        $gaji->potongan = $request->potongan;
        $gaji->total_terima = $request->total_terima;
        $gaji->tanggal = date('Y-m-d');
        $gaji->save();
        return redirect()->route('gaji.index')->with('success', 'Berhasil menambahkan gaji karyawan');
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
