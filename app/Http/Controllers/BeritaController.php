<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::all();
        return view('admin.berita.index', [
            'berita' => $berita
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.berita.create');
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
            'judul_berita' => 'required',
            'isi_berita' => 'required',
            'link' => 'required'
        ]);
        $array = $request->only([
            'judul_berita', 'isi_berita', 'link'
        ]);
        $berita = Berita::create($array);
        return redirect()->route('berita.index')
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
        $berita = Berita::find($id);
        if (!$berita) return redirect()->route('berita.index')
            ->with('error_message', 'Berita dengan id'.$id.' tidak ditemukan');
        return view('admin.berita.edit', [
            'berita' => $berita
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
            'judul_berita' => 'required',
            'isi_berita' => 'required',
            'link' => 'required'
        ]);
        $berita = Berita::find($id);
        $berita->judul_berita = $request->judul_berita;
        $berita->isi_berita = $request->isi_berita;
        $berita->link = $request->link;
        $berita->save();
        return redirect()->route('berita.index')
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
        $berita = Berita::find($id);
        if ($berita) $berita->delete();
        return redirect()->route('berita.index')
            ->with('success_message', 'Berhasil menghapus berita');
    }
}

