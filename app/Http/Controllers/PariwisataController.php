<?php

namespace App\Http\Controllers;

use App\Models\Pariwisata;
use Illuminate\Http\Request;

class PariwisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pariwisata = pariwisata::all();
        return view('admin.pariwisata.index', [
            'pariwisata' => $pariwisata
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pariwisata.create');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pariwisata = pariwisata::find($id);
        if (!$pariwisata) return redirect()->route('pariwisata.index')
            ->with('error_message', 'pariwisata dengan id'.$id.' tidak ditemukan');
        return view('admin.pariwisata.info', [
            'pariwisata' => $pariwisata
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pariwisata = pariwisata::find($id);
        if (!$pariwisata) return redirect()->route('pariwisata.index')
            ->with('error_message', 'pariwisata dengan id'.$id.' tidak ditemukan');
        return view('admin.pariwisata.edit', [
            'pariwisata' => $pariwisata
        ]);
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
        $request->validate([
            'Nama_Usaha' => 'required',
            'Tanggal_Mulai' => 'required',
            'nib' => 'required',
            'Alamat' => 'required',
            'No_Telepon' => 'required',
            'desc' => 'required',
            'omset' => 'required',
            'aset' => 'required',
            'alasan' => 'required',
            'prestasi' => 'required',
        ]);
        $berkas = $request->file('berkas');
        $pariwisata = Pariwisata::find($id);
        $pariwisata->Nama_Usaha = $request->Nama_Usaha;
        $pariwisata->Tanggal_Mulai = $request->Tanggal_Mulai;
        $pariwisata->nib = $request->nib;
        $pariwisata->Alamat = $request->Alamat;
        $pariwisata->No_Telepon = $request->No_Telepon;
        $pariwisata->desc = $request->desc;
        $pariwisata->omset = $request->omset;
        $pariwisata->aset = $request->aset;
        $pariwisata->alasan = $request->alasan;
        $pariwisata->prestasi = $request->prestasi;
        $namaFileLama = $pariwisata->berkas;
        $nama_file = $request->nomor_nib.$request->nama_usaha.".jpeg";
        if ($request->file('berkas')){
            $tujuan_upload = 'storage';
            @unlink($tujuan_upload.$nama_file); //menghapus file lama
            $berkas = $request->file('berkas');
            $berkas->move(storage_path('app/public/file'),$nama_file);
        }
        else{
            Storage::move(storage_path('app/public/file/'. $namaFileLama), storage_path('app/public/file/'. $nama_file));
        }
        $pariwisata->berkas=$nama_file;
        $pariwisata->save();
        return redirect()->route('pariwisata.index')
            ->with('success_message', 'Berhasil mengubah Formulir');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $pariwisata = pariwisata::find($id);
        if ($pariwisata) $pariwisata->delete();
        return redirect()->route('pariwisata.index')
            ->with('success_message', 'Berhasil menghapus pariwisata');
    }

    public function download($berkas)
    {
        $pariwisata = Pariwisata::where('berkas', $berkas)->firstOrFail();
        $pathToFile = storage_path('app/public/file/'. $pariwisata->berkas);
        return response()->download($pathToFile);
    }

}
