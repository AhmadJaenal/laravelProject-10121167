<?php

namespace App\Http\Controllers;

class NotFoundController extends Controller
{
    public function notfound()
    {
        return view('404.404');
    }

    public function blankpage()
    {
        return view('404.blankpage');
    }
}
