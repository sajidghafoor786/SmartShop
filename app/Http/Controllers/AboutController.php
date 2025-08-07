<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
   // About page method
    public function about()
    {
        return view('user/pages/about');
    }
}