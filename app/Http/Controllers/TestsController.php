<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestsController extends Controller
{
    public function index(){
        $sum = 0;

        for($i=0;$i<10;$i++){
            $rand = rand(0,10);
            $sum+=$rand;
        }
        return view('welcome',compact('sum'));
    }
}
