<?php

namespace App\Http\Controllers\KK;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KK extends Controller
{
    //
    public function index(){
        return view('kk/kk');
    }
}
