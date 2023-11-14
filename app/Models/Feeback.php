<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feeback extends Model
{
    protected $table = 'feeback';
    protected $fillable = [
        'name',
        'comments',
        'created_at',
        'updated_at',
        'is_active',
        ];
}
