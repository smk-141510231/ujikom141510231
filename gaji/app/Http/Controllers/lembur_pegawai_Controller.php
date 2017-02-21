<?php

namespace App\Http\Controllers;

use Request;
use App\LemburPegawai;
use App\KategoriLembur;
use App\Pegawai;
use Validator;

class lembur_pegawai_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lp = LemburPegawai::with('Kategori_lembur')->paginate(5);
        $kt = KategoriLembur::all();
        return view('lembur.index', compact('lp', 'kt'));
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
        $kl = KategoriLembur::all();
        return view('lembur.create', compact('peg','kl'));
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
        $kl = array (
            'pegawai_id'=>'required|unique:lembur_pegawais',
            'jumlah_jam'=>'required',
            );
        $pesan = array(
            'pegawai_id.required' =>'Harus Diisi broo',
            'jumlah_jam.required' =>'Harus Diisi broo',
            );

        $validation = Validator::make(Request::all(), $kl, $pesan);

        if($validation->fails())
        {
            return redirect('lembur/create')->withErrors($validation)->withInput();
        }

        $lp = Request::all();
        Lembur_pegawai::create($lp);
        return redirect('lembur');
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
        $lp = LemburPegawai::find($id);
        $kl = KategoriLembur::all();
        $peg = Pegawai::all();
        return view('lembur.edit', compact('lp','kl','peg'));
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
        $lp = Request::all();
        $lem_peg = LemburPegawai::find($id);
        $lem_peg->update($lp);
        return redirect('lembur');
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
        LemburPegawai::find($id)->delete();
        return redirect('lemburPegawai');
    }
    
}
