<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function create (Request $request)
    {
        $model = Currency::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'code' => $request->input('code'),
            'is_active' => false,
        ]);
        return redirect()->back();
    }

    public function store ()
    {
        return view('currency');
    }
    public function index(Request $request)
    {
        $currency = Currency::orderBy($request->input('sort'), 'ASC')
            ->where('is_active' , '=' , true)
            ->get();
        return view('register' , [
            'currency' => $currency
        ]);
    }
}
