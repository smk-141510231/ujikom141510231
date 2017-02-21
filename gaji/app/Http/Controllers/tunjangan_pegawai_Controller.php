<?php

namespace App\Http\Controllers;

use Request;
use App\TunjanganPegawai;
use App\Tunjangan;
use App\Pegawai;
use App\User;
use Validator;

class tunjangan_pegawai_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tp = TunjanganPegawai::paginate(5);
        $tun = Tunjangan::all();
        $user = User::all();
        return view('TunjanganPegawai.index',compact('tp','tun','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $peg = Pegawai::all();
        $tun = Tunjangan::all();
        return view('TunjanganPegawai.create', compact('peg','tun'));
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
        $tp = array (
            'kode_tunjangan_id' => 'required',
            'pegawai_id'=>'required',
            );
        $pesan = array(
            'kode_tunjangan_id.required' =>'Harus Diisi broo',
            'pegawai_id.required' =>'Harus Diisi broo',
            );

        $validation = Validator::make(Request::all(), $tp, $pesan);

        if($validation->fails())
        {
            return redirect('TunjanganPegawai/create')->withErrors($validation)->withInput();
        }

        $tunjangan_pegawai = Request::all();
        // dd($tunjangan_pegawai);
        $pegawai = Pegawai::where('id', $tunjangan_pegawai['pegawai_id'])->first();

        $check = Tunjangan::where('jabatan_id', $pegawai->jabatan_id)->where('golongan_id', $pegawai->golongan_id)->first();

        if(!isset ($check->id))
        {
            $peg = Pegawai::all();
            $tun = Tunjangan::all();
            $error = true;
        return view('TunjanganPegawai.create', compact('peg','tun','error'));
        }
        
        $tunjangan_pegawai['kode_tunjangan_id'] = $check->id;

        TunjanganPegawai::create($tunjangan_pegawai);

        return redirect('tunpeg');
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
        $tp = TunjanganPegawai::find($id);
        $tun = Tunjangan::all();
        $peg = Pegawai::all();
        return view('TunjanganPegawai.edit', compact('tp','tun','peg'));
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
        $tp = Request::all();
        $tun_peg = TunjanganPegawai::find($id);
        $tun_peg->update($tp);
        return redirect('tunpeg');
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
        TunjanganPegawai::find($id)->delete();
        return redirect('tunpeg');
    }
}
