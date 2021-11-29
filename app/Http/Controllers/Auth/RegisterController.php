<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255', 'unique:users'],
            'No_Telepon'=> ['required', 'string', 'min:8', 'max:13'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'nik' => ['required', 'string','min:16','max:16','unique:users'],
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
            'nama_ibu' => ['required', 'string', 'max:255'],
            'berkas' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
           
            
        ]);
        // $berkas = $request->file('berkas');
        // $nama_file = $request->nik.$request->nama_depan.".jpeg";
        // $berkas->move(storage_path('app/public/file'),$nama_file);
        // $request->file('berkas')->getClientOriginalName();
        // User::create ([
        //     'berkas' => $nama_file,
        // ]);
        
        // return $nama_file;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data )
    {
        // $berkas = $data['name_file'];
        $nama_file = $data['nik'].$data['nama_depan'].".jpeg";
        $data['berkas']->move(storage_path('app/public/file'),$nama_file);
        // return $data['name'];
        return User::create([
            'name' => $data['name'],
            'No_Telepon' => $data['No_Telepon'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'nik' => $data['nik'],
            'nama_depan' => $data['nama_depan'],
            'nama_belakang' => $data['nama_belakang'],
            'tempat_lahir' => $data['tempat_lahir'],
            'tanggal_lahir' => $data['tanggal_lahir'],
            'alamat' => $data['alamat'],
            'kecamatan' => $data['kecamatan'],
            'kelurahan' => $data['kelurahan'],
            'rt' => $data['rt'],
            'rw' => $data['rw'],
            'agama' => $data['agama'],
            'kwn' => $data['kwn'],
            'pekerjaan' => $data['pekerjaan'],
            'warga' => $data['warga'],
            'nama_ibu' => $data['nama_ibu'],
            'berkas' => $nama_file,
        ]);
    }
}
