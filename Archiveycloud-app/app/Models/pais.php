<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;

    protected $table      = 'pais';
    protected $primaryKey = 'pai_id';
    public $incrementing  = false;

    protected $fillable = [
        'pai_id',
        'pai_nom',
        'pai_abr'
    ];
}