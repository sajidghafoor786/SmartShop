<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // About page method
    public function contact()
    {
        return view('user/pages/contact');
    }
}
