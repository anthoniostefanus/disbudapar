<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Beritasalatiga extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'beritasalatiga';
    protected $primaryKey = 'id';
    // protected $guarded
    protected $fillable = [
        'judul_beritasalatiga',
        'isi_beritasalatiga',
        'linksalatiga',
        'created_at',
        'updated_at',
    ];
}
