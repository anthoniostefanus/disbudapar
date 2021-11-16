<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kur extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'kur';
    protected $primaryKey = 'id';
    // protected $guarded
    protected $fillable = [
        'nama_lengkap',
        'nik',
        'no_tlp',
        'Kelurahan',
        'Kecamatan',
        'rt',
        'rw',
        'address',
        'berkas_ktp',
        'berkas_ktp_pasangan',
        'jumlah_pinjaman',
        'pinjaman',
        'survei',
    ];
}
