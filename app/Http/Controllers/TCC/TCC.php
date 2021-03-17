<?php

namespace App\Http\Controllers\TCC;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TCC extends Controller
{
    //
    public function index(){
        return view('tcc/tcc');
    }
}
