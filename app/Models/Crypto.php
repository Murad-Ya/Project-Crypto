<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Crypto extends Model
{
    protected $table = 'crypto';
    protected $fillable = [
        'name',
        'price',
        'created_at',
        'updated_at'
    ];
}
