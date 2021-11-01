<?php

namespace App\Http\Controllers;

use App\Models\Kritiksaran;
use Illuminate\Http\Request;

class KritiksaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kritiksaran = kritiksaran::all();
        return view('admin.kritiksaran.index', [
            'kritiksaran' => $kritiksaran
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kritiksaran.create');
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
            'judul_kritiksaran' => 'required',
            'nama' => 'required',
            'isi_kritiksaran' => 'required'
        ]);
        $array = $request->only([
            'judul_kritiksaran', 'nama', 'isi_kritiksaran'
        ]);
        $kritiksaran = kritiksaran::create($array);
        return redirect()->route('kritiksaran.index')
            ->with('success_message', 'Berhasil menambah kritiksaran baru');
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
        $kritiksaran = kritiksaran::find($id);
        if (!$kritiksaran) return redirect()->route('kritiksaran.index')
            ->with('error_message', 'kritiksaran dengan id'.$id.' tidak ditemukan');
        return view('admin.kritiksaran.edit', [
            'kritiksaran' => $kritiksaran
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
            'judul_kritiksaran' => 'required',
            'nama' => 'required',
            'isi_kritiksaran' => 'required'
        ]);
        $kritiksaran = kritiksaran::find($id);
        $kritiksaran->judul_kritiksaran = $request->judul_kritiksaran;
        $kritiksaran->nama = $request->nama;
        $kritiksaran->isi_kritiksaran = $request->isi_kritiksaran;
        $kritiksaran->save();
        return redirect()->route('kritiksaran.index')
            ->with('success_message', 'Berhasil mengubah kritiksaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $kritiksaran = kritiksaran::find($id);
        if ($kritiksaran) $kritiksaran->delete();
        return redirect()->route('kritiksaran.index')
            ->with('success_message', 'Berhasil menghapus kritiksaran');
    }
}

