<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Berita extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'berita';
    protected $primaryKey = 'id';
    // protected $guarded
    protected $fillable = [
        'judul_berita',
        'isi_berita',
        'link',
        'created_at',
        'updated_at',
    ];
}