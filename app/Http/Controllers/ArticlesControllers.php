<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;


class ArticlesControllers
{
    public function create (Request $request)
    {
        $title = Article::create([
            'name' => $request->input('name'),
            'comments' => $request->input('comments'),
            'is_active' => false,
            ]);
    }

    public function index()
    {
        $model = Article::all();
    }
}
