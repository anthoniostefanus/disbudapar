<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekraf extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'ekraf';
    protected $primaryKey = 'id';
    // protected $guarded
    protected $fillable = [
        'nama_usaha',
        'tgl_mulai',
        'nomor_nib',
        'address',
        'no_te',
        'subj_usaha',
        'desc',
        'omset',
        'aset',
        'alasan',
        'prestasi',
        'berkas',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
