<?php

namespace App\Http\Controllers\SW;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SW extends Controller
{
    //
    public function index(){
        return view('sw/sw');
    }
}
