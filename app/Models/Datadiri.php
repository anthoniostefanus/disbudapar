<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datadiri extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'datadiri';
    protected $primaryKey = 'id';
    // protected $guarded
    protected $fillable = [
        'nib',
        'nama_depan',
        'nama_belakang',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'rt',
        'rw',
        'kelu-rahan',
        'kecamatan',
        'kota',
        'agama',
        'status_perkawinan',
        'kewarganegaraan',
        'pekerjaan',
        'username_user',
        'password',
        'nama_ibu_kandung',
        'no_handphone',
    ];
}
