<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgetController extends Controller
{
    public function ForgetPage(){
        return view("Forget");
    }
}
