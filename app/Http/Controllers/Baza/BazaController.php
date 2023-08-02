<?php

namespace App\Http\Controllers\Baza;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BazaController extends Controller
{
    public function store(Request $request)
    {
        DB::table('imputs')->insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'content'=>$request->content

        ]);


    //   dd($request);
       return back();
    }
}
