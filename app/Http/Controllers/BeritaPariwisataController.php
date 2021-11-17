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
            'judul_beritapariwisata1' => 'required',
            'isi_beritapariwisata1' => 'required',
            'linkpariwisata1' => 'required',
            'judul_beritapariwisata2' => 'required',
            'isi_beritapariwisata2' => 'required',
            'linkpariwisata2' => 'required',
            'judul_beritapariwisata3' => 'required',
            'isi_beritapariwisata3' => 'required',
            'linkpariwisata3' => 'required',
        ]);
        $array = $request->only([
            'judul_beritapariwisata1', 'isi_beritapariwisata1', 'linkpariwisata1','judul_beritapariwisata2', 'isi_beritapariwisata2', 'linkpariwisata2','judul_beritapariwisata3', 'isi_beritapariwisata3', 'linkpariwisata3'
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
            'judul_beritapariwisata1' => 'required',
            'isi_beritapariwisata1' => 'required',
            'linkpariwisata1' => 'required',
            'judul_beritapariwisata2' => 'required',
            'isi_beritapariwisata2' => 'required',
            'linkpariwisata2' => 'required',
            'judul_beritapariwisata3' => 'required',
            'isi_beritapariwisata3' => 'required',
            'linkpariwisata3' => 'required'
        ]);
        $beritapariwisata = Beritapariwisata::find($id);
        $beritapariwisata->judul_beritapariwisata1 = $request->judul_beritapariwisata1;
        $beritapariwisata->isi_beritapariwisata1 = $request->isi_beritapariwisata1;
        $beritapariwisata->linkpariwisata1 = $request->linkpariwisata1;
        $beritapariwisata->judul_beritapariwisata2 = $request->judul_beritapariwisata2;
        $beritapariwisata->isi_beritapariwisata2 = $request->isi_beritapariwisata2;
        $beritapariwisata->linkpariwisata2 = $request->linkpariwisata2;
        $beritapariwisata->judul_beritapariwisata3 = $request->judul_beritapariwisata3;
        $beritapariwisata->isi_beritapariwisata3 = $request->isi_beritapariwisata3;
        $beritapariwisata->linkpariwisata3 = $request->linkpariwisata3;
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
