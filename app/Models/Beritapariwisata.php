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
        'judul_beritapariwisata1',
        'isi_beritapariwisata1',
        'linkpariwisata1',
        'judul_beritapariwisata2',
        'isi_beritapariwisata2',
        'linkpariwisata2',
        'judul_beritapariwisata3',
        'isi_beritapariwisata3',
        'linkpariwisata3',
        'created_at',
        'updated_at',
    ];
}
