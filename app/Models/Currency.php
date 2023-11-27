<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $table = 'currency';
    protected $fillable = [
        'name',
        'price',
        'code',
        'created_at',
        'updated_at',
        'is_active'
    ];
}
