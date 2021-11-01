<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vidio;

class VidioController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vidio = Vidio::all();
        return view('admin.vidio.index', [
            'vidio' => $vidio
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vidio.create');
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
            'link' => 'required'
        ]);
        $array = $request->only([
            'link'
        ]);
        $vidio = Vidio::create($array);
        return redirect()->route('vidio.index')
            ->with('success_message', 'Berhasil menambah vidio baru');
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
        $vidio = Vidio::find($id);
        if (!$vidio) return redirect()->route('vidio.index')
            ->with('error_message', 'vidio dengan id'.$id.' tidak ditemukan');
        return view('admin.vidio.edit', [
            'vidio' => $vidio
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
            'link' => 'required'
        ]);
        $vidio = Vidio::find($id);
        $vidio->link = $request->link;
        $vidio->save();
        return redirect()->route('vidio.index')
            ->with('success_message', 'Berhasil mengubah vidio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $vidio = Vidio::find($id);
        if ($vidio) $vidio->delete();
        return redirect()->route('vidio.index')
            ->with('success_message', 'Berhasil menghapus vidio');
    }
}
