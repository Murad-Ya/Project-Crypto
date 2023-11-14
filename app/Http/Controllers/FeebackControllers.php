<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeebackControllers
{
    public function massage(Request $request)
    {
        $model = new FeebackControllers();
        $model -> name = $request->input('name');
        $model -> comments = $request->input('comments');
        $model -> is_active = $request->input('is_active');
        $model -> save();
    }
}
