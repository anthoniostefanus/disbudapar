<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Kritiksaran extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'kritiksaran';
    protected $primaryKey = 'id';
    // protected $guarded
    protected $fillable = [
        'judul_kritiksaran',
        'nama',
        'isi_kritiksaran',
    ];
}
