<?php

namespace App\Http\Controllers\Backend\chackout;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ChackoutController extends Controller
{
    public function add_to_chackout()
    {

        if (Auth::check()) {
           return view('Frontend.chackout.chackout');
        }else {
           return redirect()->route('login');
        }

    

    }
}
