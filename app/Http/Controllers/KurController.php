<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kur;

class KurController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kur = Kur::all();
        return view('admin.kur.index', [
            'kur' => $kur
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kur.create');
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
            'nama_lengkap' => 'required',
            'nik' => 'required',
            'no_tlp' => 'required',
            'Kelurahan' => 'required',
            'Kecamatan' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'address' => 'required',
            'jumlah_pinjaman' => 'required',
            'pinjaman' => 'required',
            'survei' => 'required'

          
        ]);
        $array = $request->only([
            'nama_lengkap', 'nik', 'no_tlp','Kelurahan','Kecamatan','rt','rw','address','jumlah_pinjaman','pinjaman','survei'
        ]);
        
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
    public function destroy(Request $request, $id)
    {
       //
    }
}
