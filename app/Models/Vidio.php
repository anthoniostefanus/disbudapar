<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Vidio extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'vidio';
    protected $primaryKey = 'id';
    // protected $guarded
    protected $fillable = [
        'link',
        'created_at',
        'updated_at',
    ];
}
