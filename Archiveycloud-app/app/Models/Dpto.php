<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dpto extends Model
{
    use HasFactory;

    protected $table      = 'dptos';
    protected $primaryKey = 'dpt_id';
    public $incrementing  = false;

    protected $fillable = [
        'dpt_id',
        'dpt_nom',
        'pai_id'
    ];

    
}