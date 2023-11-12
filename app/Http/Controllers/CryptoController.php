<?php

namespace App\Http\Controllers;

use App\Models\Crypto;
use Illuminate\Http\Request;

class CryptoController
{


    public function crypto(Request $request)
    {

        $crypto = Crypto::create([
            'name' => $request->input('name'),
            'price' => $request->input('price')
        ]);
            }
        public function getCrypto ()
             {
                 $crypto = Crypto::where('is_active'. true)->get();
             }



}
