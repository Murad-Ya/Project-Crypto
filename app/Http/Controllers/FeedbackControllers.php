<?php

namespace App\Http\Controllers;

use App\Models\Crypto;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackControllers
{
    public function message(Request $request)
    {
        $title = Feedback::create([
            'name' => $request->input('name'),
            'comments' => $request->input('comments'),
            'is_active' => false,
        ]);
    }
    public function getMessage ()
    {
        $model = Feedback::all();
        return  view('comments' , [
            'feedback' => $model
        ]);
    }
}
