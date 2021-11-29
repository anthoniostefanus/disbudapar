<?php

namespace App\Http\Controllers;
use App\Models\Ekraf;
use App\Models\Pariwisata;
use App\Models\Kur;
use App\Models\user;
use App\Models\Profile;
use Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ekraf = Ekraf::where('user_id',Auth::user()->id)->get();
        $pariwisata = Pariwisata::where('user_id',Auth::user()->id)->get();
        $kur = Kur::where('user_id',Auth::user()->id)->get();
        $profile = Profile::where('user_id',Auth::user()->id)->get();
        $user = Auth::user()->id;
        return view('profile.index', ['user' => $user],  compact('ekraf', 'kur', 'pariwisata','profile','user'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'berkas' => 'required|mimes:JPEG,jpeg|max:2000'
        ]);

        $berkas = $request->file('berkas');
        $nama_file = $user->id.".jpeg";
        $berkas->move(storage_path('app/public/file'),$nama_file);
        $request->file('berkas')->getClientOriginalName();
        Profile::create([
            'berkas' => $nama_file,
            'user_id' => $user->id,
        ]);
        return redirect()->route('profile.index');
        
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
     $profile = profile::where('user_id',Auth::user()->id)->get();
        return view('profile.index', ['profile' => $profile]);
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
        if (!$user) return redirect()->route('profile.index')
            ->with('error_message', 'User dengan id'.$id.' tidak ditemukan');
        return view('profile.gantipass', [
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
            'password' => 'sometimes|nullable|confirmed'
        ]);
        $user = User::find($id);
        if ($request->password) $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('profile.index')
            ->with('success_message', 'Berhasil mengubah user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        
    }
    public function download($berkas)
    {
        $profile = profile::where('berkas', $berkas)->firstOrFail();
        $pathToFile = storage_path('app/public/file/'. $profile->berkas);
        return response()->download($pathToFile);
    }
}