<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BeritaPariwisata;

class BeritaPariwisataController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritapariwisata = Beritapariwisata::all();
        return view('admin.berita.beritapariwisata.index', [
            'beritapariwisata' => $beritapariwisata
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.berita.beritapariwisata.create');
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
            'judul_beritapariwisata' => 'required',
            'isi_beritapariwisata' => 'required',
            'linkpariwisata' => 'required'
        ]);
        $array = $request->only([
            'judul_beritapariwisata', 'isi_beritapariwisata', 'linkpariwisata'
        ]);
        $beritapariwisata = Beritapariwisata::create($array);
        return redirect()->route('beritapariwisata.index')
            ->with('success_message', 'Berhasil menambah berita baru');
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
        $beritapariwisata = Beritapariwisata::find($id);
        if (!$beritapariwisata) return redirect()->route('beritapariwisata.index')
            ->with('error_message', 'Berita dengan id'.$id.' tidak ditemukan');
        return view('admin.berita.beritapariwisata.edit', [
            'beritapariwisata' => $beritapariwisata
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
            'judul_beritapariwisata' => 'required',
            'isi_beritapariwisata' => 'required',
            'linkpariwisata' => 'required'
        ]);
        $beritapariwisata = Beritapariwisata::find($id);
        $beritapariwisata->judul_beritapariwisata = $request->judul_beritapariwisata;
        $beritapariwisata->isi_beritapariwisata = $request->isi_beritapariwisata;
        $beritapariwisata->linkpariwisata = $request->linkpariwisata;
        $beritapariwisata->save();
        return redirect()->route('beritapariwisata.index')
            ->with('success_message', 'Berhasil mengubah berita');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $beritapariwisata = Beritapariwisata::find($id);
        if ($beritapariwisata) $beritapariwisata->delete();
        return redirect()->route('beritapariwisata.index')
            ->with('success_message', 'Berhasil menghapus berita');
    }
}
