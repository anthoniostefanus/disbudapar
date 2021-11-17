<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Beritaekraf extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'beritaekraf';
    protected $primaryKey = 'id';
    // protected $guarded
    protected $fillable = [
        'judul_beritaekraf1',
        'isi_beritaekraf1',
        'linkekraf1',
        'judul_beritaekraf2',
        'isi_beritaekraf2',
        'linkekraf2',
        'judul_beritaekraf3',
        'isi_beritaekraf3',
        'linkekraf3',
        'created_at',
        'updated_at',
    ];
}
