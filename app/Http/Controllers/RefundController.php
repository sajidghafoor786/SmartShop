<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RefundController extends Controller
{
    // Refund page method
    public function Refund()
    {
        return view('user/pages/refund_policy');
    }
}