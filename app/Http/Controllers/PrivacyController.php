<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyController extends Controller
{
     // Privacy page method
    public function privacy()
    {
        return view('user/pages/privacy');
    }
}
