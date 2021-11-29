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
            'Nama_Usaha' => 'required',
            'Tanggal_Mulai' => 'required',
            'nib' => 'required',
            'Alamat' => 'required',
            'No_Telepon' => ['required', 'string', 'min:8', 'max:13'],
            'desc' => ['required', 'string', 'max:25500000'],
            'omset' => 'required',
            'aset' => 'required',
            'alasan' => 'required',
            'prestasi' => 'required',
            'berkas' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
            'Nama_Usaha' => $request->Nama_Usaha, 
            'Tanggal_Mulai' => $request->Tanggal_Mulai, 
            'nib' => $request->nib, 
            'Alamat' => $request->Alamat, 
            'No_Telepon' => $request->No_Telepon, 
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
