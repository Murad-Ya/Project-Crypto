<?php

namespace App\Http\Controllers;

use App\Models\Crypto;
use Illuminate\Http\Request;

class CryptoController
{


    public function crypto(Request $request)
    {
//        $title = Crypto::create([
//            'name' => $request->input('name'),
//            'price' => $request->input('price'),
//            'is_active' => false,
//        ]);

        $crypto = Crypto::where('price' , '>=', 500)
            ->orderBy($request->input('sort'), 'DESC')
            ->get();

        return view('welcome' , [
            'crypto' => $crypto
        ]);

//
//        $crypto = Crypto::create([
//            'name' => $request->input('name'),
//            'price' => $request->input('price'),
//            'is_active' => false,
//
//        ]);
            }

//                public function index (Request $request)
//                {
//                    $model = Crypto::where('price' , '>=', 500)
//                        ->orderBy($request->input('sort'), 'DESC')
//                        ->get();
//                }
        public function getCrypto (Request $request)
             {

        $crypto = Crypto::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'is_active' => false,

        ]);
             }



}
