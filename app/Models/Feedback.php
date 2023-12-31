<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedback';
    protected $fillable = [
        'name',
        'comments',
        'created_at',
        'updated_at',
        'is_active',
        ];
}
