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
        'nama_usaha',
        'tgl_mulai',
        'nomor_nib',
        'address',
        'no_te',
        'desc',
        'omset',
        'aset',
        'alasan',
        'prestasi',
        'berkas',
    ];

    public function user()
    {
        return $this->belongTo(User::class);
    }
}
