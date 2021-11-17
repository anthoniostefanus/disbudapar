<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BeritaSalatiga;

class BeritaSalatigaController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritasalatiga = Beritasalatiga::all();
        return view('admin.berita.beritasalatiga.index', [
            'beritasalatiga' => $beritasalatiga
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.berita.beritasalatiga.create');
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
            'judul_beritasalatiga1' => 'required',
            'isi_beritasalatiga1' => 'required',
            'linksalatiga1' => 'required',
            'judul_beritasalatiga2' => 'required',
            'isi_beritasalatiga2' => 'required',
            'linksalatiga2' => 'required',
            'judul_beritasalatiga3' => 'required',
            'isi_beritasalatiga3' => 'required',
            'linksalatiga3' => 'required',
        ]);
        $array = $request->only([
            'judul_beritasalatiga1', 'isi_beritasalatiga1', 'linksalatiga1','judul_beritasalatiga2', 'isi_beritasalatiga2', 'linksalatiga2','judul_beritasalatiga3', 'isi_beritasalatiga3', 'linksalatiga3'
        ]);
        $beritasalatiga = Beritasalatiga::create($array);
        return redirect()->route('beritasalatiga.index')
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
        $beritasalatiga = Beritasalatiga::find($id);
        if (!$beritasalatiga) return redirect()->route('beritasalatiga.index')
            ->with('error_message', 'Berita dengan id'.$id.' tidak ditemukan');
        return view('admin.berita.beritasalatiga.edit', [
            'beritasalatiga' => $beritasalatiga
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
            'judul_beritasalatiga1' => 'required',
            'isi_beritasalatiga1' => 'required',
            'linksalatiga1' => 'required',
            'judul_beritasalatiga2' => 'required',
            'isi_beritasalatiga2' => 'required',
            'linksalatiga2' => 'required',
            'judul_beritasalatiga3' => 'required',
            'isi_beritasalatiga3' => 'required',
            'linksalatiga3' => 'required'
        ]);
        $beritasalatiga = Beritasalatiga::find($id);
        $beritasalatiga->judul_beritasalatiga1 = $request->judul_beritasalatiga1;
        $beritasalatiga->isi_beritasalatiga1 = $request->isi_beritasalatiga1;
        $beritasalatiga->linksalatiga1 = $request->linksalatiga1;
        $beritasalatiga->judul_beritasalatiga2 = $request->judul_beritasalatiga2;
        $beritasalatiga->isi_beritasalatiga2 = $request->isi_beritasalatiga2;
        $beritasalatiga->linksalatiga2 = $request->linksalatiga2;
        $beritasalatiga->judul_beritasalatiga3 = $request->judul_beritasalatiga3;
        $beritasalatiga->isi_beritasalatiga3 = $request->isi_beritasalatiga3;
        $beritasalatiga->linksalatiga3 = $request->linksalatiga3;
        $beritasalatiga->save();
        return redirect()->route('beritasalatiga.index')
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
        $beritasalatiga = Beritasalatiga::find($id);
        if ($beritasalatiga) $beritasalatiga->delete();
        return redirect()->route('beritasalatiga.index')
            ->with('success_message', 'Berhasil menghapus berita');
    }
}
