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
        'judul_beritasalatiga1',
        'isi_beritasalatiga1',
        'linksalatiga1',
        'judul_beritasalatiga2',
        'isi_beritasalatiga2',
        'linksalatiga2',
        'judul_beritasalatiga3',
        'isi_beritasalatiga3',
        'linksalatiga3',
        'created_at',
        'updated_at',
    ];
}
