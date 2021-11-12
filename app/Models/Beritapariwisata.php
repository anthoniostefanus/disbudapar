<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Beritapariwisata extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'beritapariwisata';
    protected $primaryKey = 'id';
    // protected $guarded
    protected $fillable = [
        'judul_beritapariwisata',
        'isi_beritapariwisata',
        'linkpariwisata',
        'created_at',
        'updated_at',
    ];
}
