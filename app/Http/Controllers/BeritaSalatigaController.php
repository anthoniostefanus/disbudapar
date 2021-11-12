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
            'judul_beritasalatiga' => 'required',
            'isi_beritasalatiga' => 'required',
            'linksalatiga' => 'required'
        ]);
        $array = $request->only([
            'judul_beritasalatiga', 'isi_beritasalatiga', 'linksalatiga'
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
            'judul_beritasalatiga' => 'required',
            'isi_beritasalatiga' => 'required',
            'linksalatiga' => 'required'
        ]);
        $beritasalatiga = Beritasalatiga::find($id);
        $beritasalatiga->judul_beritasalatiga = $request->judul_beritasalatiga;
        $beritasalatiga->isi_beritasalatiga = $request->isi_beritasalatiga;
        $beritasalatiga->linksalatiga = $request->linksalatiga;
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
