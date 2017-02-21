<?php

namespace App\Http\Controllers;

use Request;
use App\KategoriLembur;
use App\Golongan;
use App\Jabatan;
use Validator;

class kategoriLemburController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kl = KategoriLembur::paginate(5);
        $jab = Jabatan::all();
        $gol = Golongan::all();
        return view('kategori_lembur.index', compact('kl','jab','gol'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $jab = Jabatan::all();
        $gol = Golongan::all();
        return view('kategori_lembur.create', compact('jab','gol'));
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
            'kode_lembur'=>'required|unique:kategori_lemburs',
            'jabatan_id'=>'required',
            'golongan_id'=>'required',
            'besaran_uang'=>'required',
            );
        $pesan = array(
            'kode_lembur.required' =>'Harus Diisi broo',
            'jabatan_id.required' =>'Harus Diisi broo',
            'golongan_id.required' =>'Harus Diisi broo',
            'besaran_uang.required' =>'Harus Diisi broo',
            );

        $validation = Validator::make(Request::all(), $kl, $pesan);

        if($validation->fails())
        {
            return redirect('kategori/create')->withErrors($validation)->withInput();
        }
        $kategori_lembur = Request::all();
        KategoriLembur::create($kategori_lembur);
        return redirect('kategori');
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
         $kl = KategoriLembur::find($id);
        $jab = Jabatan::all();
        $gol = Golongan::all();
        return view('kategori_lembur.edit', compact('kl','jab','gol'));
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
        $kl = Request::all();
        $ka_lem = KategoriLembur::find($id);
        $ka_lem->update($kl);
        return redirect('kategori');
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
        KategoriLembur::find($id)->delete();
        return redirect('kategori'); 
    }
}
