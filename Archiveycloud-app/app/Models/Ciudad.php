<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;

    protected $table      = 'ciudades';
    protected $primaryKey = 'ciu_id';
    public $incrementing  = false;

    protected $fillable = [
        'ciu_id',
        'ciu_nom',
        'dpt_id'
    ];

}