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
        'nama-usaha',
        'tgl-mulai',
        'nomor-nib',
        'address',
        'no-te',
        'subj-usaha',
        'desc',
        'omset',
        'aset',
        'alasan',
        'prestasi',
    ];
}
