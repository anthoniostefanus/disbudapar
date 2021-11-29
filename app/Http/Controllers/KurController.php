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
            'No_Telepon' => 'required',
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
        $kur = kur::find($id);
        if (!$kur) return redirect()->route('kur.index')
            ->with('error_message', 'kur dengan id'.$id.' tidak ditemukan');
        return view('admin.kur.info', [
            'kur' => $kur
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
        $kur = kur::find($id);
        if (!$kur) return redirect()->route('kur.index')
            ->with('error_message', 'kur dengan id'.$id.' tidak ditemukan');
        return view('admin.kur.edit', [
            'kur' => $kur
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
            'nama_lengkap' => 'required',
            'nik' => 'required',
            'No_Telepon' => 'required',
            'Kelurahan' => 'required',
            'Kecamatan' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'address' => 'required',
            'jumlah_pinjaman' => 'required',
            'pinjaman' => 'required',
            'survei' => 'required',
        ]);
        $berkas_ktp = $request->file('berkas_ktp');
        $berkas_ktp_pasangan = $request->file('berkas_ktp_pasangan');
        $kur = kur::find($id);
        $kur->nama_lengkap = $request->nama_lengkap;
        $kur->nik = $request->nik;
        $kur->No_Telepon = $request->No_Telepon;
        $kur->Kelurahan = $request->Kelurahan;
        $kur->Kecamatan = $request->Kecamatan;
        $kur->rt = $request->rt;
        $kur->rw = $request->rw;
        $kur->address = $request->address;
        $kur->jumlah_pinjaman = $request->jumlah_pinjaman;
        $kur->pinjaman = $request->pinjaman;
        $kur->survei = $request->survei;
        $namaFileLama1 = $kur->berkas_ktp;
        $namaFileLama2 = $kur->berkas_ktp_pasangan;
        $nama_file_ktp = $request->nomor_nib.$request->nama_usaha.".jpeg";
        $nama_file_ktp_pasangan = $request->nama_usaha.$request->nomor_nib.".jpeg";
        if ($request->file('berkas_ktp') && $request->file('berkas_ktp_pasangan'))
        {
            $tujuan_upload = 'storage';
            @unlink($tujuan_upload.$nama_file_ktp);
            @unlink($tujuan_upload.$nama_file_ktp_pasangan);
             //menghapus file lama
            $berkas_ktp = $request->file('berkas_ktp','berkas_ktp_pasangan');
            $berkas_ktp->move(storage_path('app/public/file'),$nama_file_ktp)->move(storage_path('app/public/file'),$nama_file_ktp_pasangan);
           
        }
        else
        {
            Storage::move(storage_path('app/public/file/'. $namaFileLama1), storage_path('app/public/file/'. $nama_file_ktp));
            Storage::move(storage_path('app/public/file/'. $namaFileLama2), storage_path('app/public/file/'. $nama_file_ktp_pasangan));
        }
        $kur->berkas_ktp=$nama_file_ktp;
        $kur->berkas_ktp_pasangan=$nama_file_ktp_pasangan;
        $kur->save();
        return redirect()->route('kur.index')
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
       //
    }
    public function download($berkas_ktp)
    {
        $kur = kur::where('berkas_ktp', $berkas_ktp)->firstOrFail();
        $pathToFile = storage_path('app/public/file/'. $kur->berkas_ktp);
        return response()->download($pathToFile);
    }
    public function download1($berkas_ktp_pasangan)
    {
        $kur = kur::where('berkas_ktp_pasangan', $berkas_ktp_pasangan)->firstOrFail();
        $pathToFile = storage_path('app/public/file/'. $kur->berkas_ktp_pasangan);
        return response()->download($pathToFile);
    }
}