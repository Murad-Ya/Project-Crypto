<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = [
        'name',
        'comments',
        'created_at',
        'updated_at',
        'is_active',
    ];
}
