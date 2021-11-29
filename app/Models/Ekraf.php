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
        'Nama_Usaha',
        'Tanggal_Mulai',
        'nib',
        'Alamat',
        'No_Telepon',
        'subj_usaha',
        'desc',
        'omset',
        'aset',
        'alasan',
        'prestasi',
        'berkas',
        'user_id',
    ];

}
