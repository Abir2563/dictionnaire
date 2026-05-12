<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Terme extends Model
{
    protected $table = 'terme';
    protected $fillable = ['nom', 'def','lecon'];
    
}