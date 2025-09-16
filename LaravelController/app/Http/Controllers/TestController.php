<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Handle the incoming request.
     */
    // public function __invoke(Request $request)
    public function __invoke()
    {
        return view('test');
    }
}
