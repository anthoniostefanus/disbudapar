<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pariwisata extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'pariwisata';
    protected $primaryKey = 'id';
    // protected $guarded
    protected $fillable = [
        'nib',
        'nama_usaha',
        'tanggal_berdiri',
        'no_telfon',
        'deskripsi_obyek_wisata',
        'omset',
        'aset',
        'alasan_mendaftar',
        'prestasi_usaha',
        'nik',
    ];
}
