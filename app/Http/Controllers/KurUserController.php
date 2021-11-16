<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kur;

class KurUserController extends Controller
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
        return view('formulir.pinjaman-kur');
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
            'berkas_ktp' => 'required|mimes:JPEG,jpeg|max:2000',
            'berkas_ktp_pasangan' => 'required|mimes:JPEG,jpeg|max:2000',
            'jumlah_pinjaman' => 'required',
            'pinjaman' => 'required',
            'survei' => 'required'
        ]);
        $berkas_ktp = $request->file('berkas_ktp');
        $berkas_ktp_pasangan = $request->file('berkas_ktp_pasangan');
        $nama_file_ktp = $request->nik.$request->no_tlp.".jpeg";
        $nama_file_ktp_pasangan = $request->no_tlp.$request->nik.".jpeg";
        
        // $tujuan_upload = Storage::putFile(
        //     'public/file',
        //     $berkas, $nama_file
        // );
        $berkas_ktp->move(storage_path('app/public/file'),$nama_file_ktp);
        $berkas_ktp_pasangan->move(storage_path('app/public/file'),$nama_file_ktp_pasangan);
    
        $request->file('berkas_ktp')->getClientOriginalName();
        $request->file('berkas_ktp_pasangan')->getClientOriginalName();
        Kur::create([
            'nama_lengkap' => $request->nama_lengkap, 
            'nik' => $request->nik, 
            'no_tlp' => $request->no_tlp, 
            'Kelurahan' => $request->Kelurahan, 
            'Kecamatan' => $request->Kecamatan, 
            'rt' => $request->rt, 
            'rw' => $request->rw, 
            'address' => $request->address, 
            'berkas_ktp' => $nama_file_ktp, 
            'berkas_ktp_pasangan' => $nama_file_ktp_pasangan, 
            'jumlah_pinjaman' => $request->jumlah_pinjaman, 
            'pinjaman' =>  $request->pinjaman,
            'survei' =>  $request->survei,
        ]);
        return redirect()->route('pinjaman-kur.index');
        
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
