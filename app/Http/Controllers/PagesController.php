<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function root()
    {
        return view('pages.root');
    }

    public function test()
    {
        $a = ['a'=>'1', 'b'=>null];
        $b = ['a'=>'1', 'b'=>'2'];
        dd($a+$b);
    }
}
