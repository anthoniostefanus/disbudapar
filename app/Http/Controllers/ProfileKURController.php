<?php

namespace App\Http\Controllers;
use App\Models\Ekraf;
use App\Models\Pariwisata;
use App\Models\Kur;
use App\Models\user;
use Auth;
use Illuminate\Http\Request;

class ProfileKURController extends Controller
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
        return view('profile.index', ['ekraf' => $ekraf],  compact('ekraf', 'kur', 'pariwisata'));
       
       
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
        //
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $kur = kur::where('user_id',Auth::user()->id)->get();
        return view('profile.info-kur', ['kur' => $kur]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        
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
    public function download($berkas_ktp)
    {
        $kur = kur::where('berkas_ktp', $berkas_ktp)->firstOrFail();
        $pathToFile = storage_path('app/public/file/'. $kur->berkas_ktp);
        return response()->download($pathToFile);
    }
    public function download1($berkas_ktp_pasangan)
    {
        $kur = kur::where('berkas_ktp_pasangan', $berkas_ktp_pasangan)->firstOrFail();
        $pathToFile = storage_path('app/public/file/'. $kur->berkas_ktp_pasangan);
        return response()->download($pathToFile);
    }
}
