<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ekraf;

class EkrafController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ekraf = Ekraf::all();
        return view('admin.ekraf.index', [
            'ekraf' => $ekraf
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ekraf.create');
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
            'nama_usaha' => 'required',
            'tgl_mulai' => 'required',
            'nomor_nib' => 'required',
            'address' => 'required',
            'no_te' => 'required',
            'subj_usaha' => 'required',
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
        Ekraf::create([
            'nama_usaha' => $request->nama_usaha, 
            'tgl_mulai' => $request->tgl_mulai, 
            'nomor_nib' => $request->nomor_nib, 
            'address' => $request->address, 
            'no_te' => $request->no_te, 
            'subj_usaha' => $request->subj_usaha, 
            'desc' => $request->desc, 
            'omset' => $request->omset, 
            'aset' => $request->aset, 
            'alasan' => $request->alasan, 
            'prestasi' => $request->prestasi, 
            'berkas' => $nama_file,
        ]);
        return redirect()->route('ekraf.index');
        
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ekraf = ekraf::find($id);
        if (!$ekraf) return redirect()->route('ekraf.index')
            ->with('error_message', 'ekraf dengan id'.$id.' tidak ditemukan');
        return view('admin.ekraf.info', [
            'ekraf' => $ekraf
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
        $ekraf = ekraf::find($id);
        if (!$ekraf) return redirect()->route('ekraf.index')
            ->with('error_message', 'ekraf dengan id'.$id.' tidak ditemukan');
        return view('admin.ekraf.edit', [
            'ekraf' => $ekraf
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
            'nib' => ['required', 'string', 'min:13', 'max:13'],
            'Alamat' => 'required',
            'No_Telepon' => ['required', 'string', 'min:8', 'max:13'],
            'subj_usaha' => 'required',
            'desc' => ['required', 'string', 'max:25500'],
            'omset' => 'required',
            'aset' => 'required',
            'alasan' => 'required',
            'prestasi' => 'required',
            'berkas' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $berkas = $request->file('berkas');
        $ekraf = ekraf::find($id);
        $ekraf->Nama_Usaha = $request->Nama_Usaha;
        $ekraf->Tanggal_Mulai = $request->Tanggal_Mulai;
        $ekraf->nib = $request->nib;
        $ekraf->Alamat = $request->Alamat;
        $ekraf->No_Telepon = $request->No_Telepon;
        $ekraf->subj_usaha = $request->subj_usaha;
        $ekraf->desc = $request->desc;
        $ekraf->omset = $request->omset;
        $ekraf->aset = $request->aset;
        $ekraf->alasan = $request->alasan;
        $ekraf->prestasi = $request->prestasi;
        $namaFileLama = $ekraf->berkas;
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
        $ekraf->berkas=$nama_file;
        $ekraf->save();
        return redirect()->route('ekraf.index')
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
       $ekraf = ekraf::find($id);
       if ($ekraf) $ekraf->delete();
       return redirect()->route('ekraf.index')
           ->with('success_message', 'Berhasil menghapus ekraf');
    }
    
    public function download($berkas)
    {
        $ekraf = Ekraf::where('berkas', $berkas)->firstOrFail();
        $pathToFile = storage_path('app/public/file/'. $ekraf->berkas);
        return response()->download($pathToFile);
    }

}
