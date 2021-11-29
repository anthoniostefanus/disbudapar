<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DatadiriController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.datadiri.index', [
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.datadiri.create');
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
            'name' => 'required',
            'No_Telepon' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed'
        ]);
        $array = $request->only([
            'name','No_Telepon','email','password'
        ]);
        $array['password'] = bcrypt($array['password']);
        $user = User::create($array);
        return redirect()->route('users.index')
            ->with('success_message', 'Berhasil menambah user baru');
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        if (!$user) return redirect()->route('users.index')
            ->with('error_message', 'User dengan id'.$id.' tidak ditemukan');
        return view('admin.datadiri.info', [
            'user' => $user
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
        $user = User::find($id);
        if (!$user) return redirect()->route('users.index')
            ->with('error_message', 'User dengan id'.$id.' tidak ditemukan');
        return view('admin.datadiri.edit', [
            'user' => $user
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
            'nama_depan' => ['required', 'string', 'max:255'],
            'nama_belakang' => ['required', 'string', 'max:255'],
            'tempat_lahir' => ['required', 'string', 'max:255'],
            'tanggal_lahir' => ['required'],
            'alamat'  => ['required', 'string', 'max:255'],
            'kecamatan' => ['required', 'string', 'max:255'],
            'kelurahan'  => ['required', 'string', 'max:255'],
            'rt'  => ['required', 'string', 'max:255'],
            'rw'  => ['required', 'string', 'max:255'],
            'agama'  => ['required'],
            'kwn' => ['required'],
            'pekerjaan' => ['required', 'string', 'max:255'],
            'warga' => ['required'],
            'berkas' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $user = User::find($id);
        $user->nama_depan = $request->nama_depan;
        $user->nama_belakang = $request->nama_belakang;
        $user->tempat_lahir = $request->tempat_lahir;
        $user->tanggal_lahir = $request->tanggal_lahir;
        $user->alamat = $request->alamat;
        $user->kecamatan = $request->kecamatan;
        $user->kelurahan = $request->kelurahan;
        $user->rt = $request->rt;
        $user->rw = $request->rw;
        $user->agama = $request->agama;
        $user->kwn = $request->kwn;
        $user->pekerjaan = $request->pekerjaan;
        $user->warga = $request->warga;
        $namaFileLama = $user->berkas;
        $nama_file = $request->nik.$request->nama_depan.".jpeg";
        if ($request->file('berkas')){
            $tujuan_upload = 'storage';
            @unlink($tujuan_upload.$nama_file); //menghapus file lama
            $berkas = $request->file('berkas');
            $berkas->move(storage_path('app/public/file'),$nama_file);
        }
        else{
            Storage::move(storage_path('app/public/file/'. $namaFileLama), storage_path('app/public/file/'. $nama_file));
        }
        $user->berkas=$nama_file;
        $user->save();
        return redirect()->route('datadiri.index')
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
        $user = User::find($id);
        if ($id == $request->user()->id) return redirect()->route('users.index')
            ->with('error_message', 'Anda tidak dapat menghapus diri sendiri.');
        if ($user) $user->delete();
        return redirect()->route('users.index')
            ->with('success_message', 'Berhasil menghapus user');
    }
    public function download($berkas)
    {
        $user = user::where('berkas', $berkas)->firstOrFail();
        $pathToFile = storage_path('app/public/file/'. $user->berkas);
        return response()->download($pathToFile);
    }
}
