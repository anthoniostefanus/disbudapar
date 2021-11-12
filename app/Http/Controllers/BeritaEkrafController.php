<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beritaekraf;

class BeritaEkrafController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritaekraf = Beritaekraf::all();
        return view('admin.berita.beritaekraf.index', [
            'beritaekraf' => $beritaekraf
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.berita.beritaekraf.create');
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
            'judul_beritaekraf' => 'required',
            'isi_beritaekraf' => 'required',
            'linkekraf' => 'required'
        ]);
        $array = $request->only([
            'judul_beritaekraf', 'isi_beritaekraf', 'linkekraf'
        ]);
        $beritaekraf = BeritaEkraf::create($array);
        return redirect()->route('beritaekraf.index')
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
        $beritaekraf = Beritaekraf::find($id);
        if (!$beritaekraf) return redirect()->route('beritaekraf.index')
            ->with('error_message', 'Berita dengan id'.$id.' tidak ditemukan');
        return view('admin.berita.beritaekraf.edit', [
            'beritaekraf' => $beritaekraf
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
            'judul_beritaekraf' => 'required',
            'isi_beritaekraf' => 'required',
            'linkekraf' => 'required'
        ]);
        $beritaekraf = Beritaekraf::find($id);
        $beritaekraf->judul_beritaekraf = $request->judul_beritaekraf;
        $beritaekraf->isi_beritaekraf = $request->isi_beritaekraf;
        $beritaekraf->linkekraf = $request->linkekraf;
        $beritaekraf->save();
        return redirect()->route('beritaekraf.index')
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
        $beritaekraf = Beritaekraf::find($id);
        if ($beritaekraf) $beritaekraf->delete();
        return redirect()->route('beritaekraf.index')
            ->with('success_message', 'Berhasil menghapus berita');
    }
}
