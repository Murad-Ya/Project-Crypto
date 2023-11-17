<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeebackControllers
{
    public function massage(Request $request)
    {

            $title = FeebackControllers::create([
            'name' => $request->input('name'),
            'comments' => $request->input('comments'),
            'is_active' => false,

        ]);
    }
    public function getMassage ()
    {
        $crypto = FeebackControllers::where('is_active'. true)->get();
    }
}
