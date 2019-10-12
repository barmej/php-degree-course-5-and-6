<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function toArabic(){
        session(['lang'=>'ar']);
        return back();
    }

    public function toEnglish()
    {
        session(['lang' => 'en']);
        return back();
    }
}
