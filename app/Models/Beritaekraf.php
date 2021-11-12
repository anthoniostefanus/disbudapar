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
        'judul_beritaekraf',
        'isi_beritaekraf',
        'linkekraf',
        'created_at',
        'updated_at',
    ];
}
