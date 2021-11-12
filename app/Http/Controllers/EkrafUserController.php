<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ekraf;

class EkrafUserController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('formulir.main-formulir');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formulir.regis-ek');
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
            'nama-usaha' => 'required',
            'tgl-mulai' => 'required',
            'nomor-nib' => 'required',
            'address' => 'required',
            'no-te' => 'required',
            'subj-usaha' => 'required',
            'desc' => 'required',
            'omset' => 'required',
            'aset' => 'required',
            'alasan' => 'required',
            'prestasi' => 'required'
        ]);
        $array = $request->only([
            'nama-usaha', 'tgl-mulai', 'nomor-nib','address','no-te','subj-usaha','desc','omset','aset','alasan','prestasi'
        ]);
        $ekraf = Ekraf::create($array);
        return redirect()->route('formulirekraf.index');
        
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