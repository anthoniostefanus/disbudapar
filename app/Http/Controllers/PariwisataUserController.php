<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pariwisata;
use Auth;

class PariwisataUserController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('formulir.thxcard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formulir.regis-par');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'nama_usaha' => 'required',
            'tgl_mulai' => 'required',
            'nomor_nib' => 'required',
            'address' => 'required',
            'no_te' => 'required',
            'desc' => 'required',
            'omset' => 'required',
            'aset' => 'required',
            'alasan' => 'required',
            'prestasi' => 'required',
            'berkas' => 'required|mimes:JPEG,jpeg|max:2000'
        ]);
         $berkas = $request->file('berkas');
        $nama_file = $request->nomor_nib.$request->nama_usaha.".jpeg";
        
        // $tujuan_upload = Storage::putFile(
        //     'public/file',
        //     $berkas, $nama_file
        // );
        $berkas->move(storage_path('app/public/file'),$nama_file);
    
        $request->file('berkas')->getClientOriginalName();
        Pariwisata::create([
            'nama_usaha' => $request->nama_usaha, 
            'tgl_mulai' => $request->tgl_mulai, 
            'nomor_nib' => $request->nomor_nib, 
            'address' => $request->address, 
            'no_te' => $request->no_te, 
            'desc' => $request->desc, 
            'omset' => $request->omset, 
            'aset' => $request->aset, 
            'alasan' => $request->alasan, 
            'prestasi' => $request->prestasi, 
            'berkas' => $nama_file,
            'user_id' => $user->id, 
        ]);
        return redirect()->route('formulirpariwisata.index');
        
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
