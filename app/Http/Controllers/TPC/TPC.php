<?php

namespace App\Http\Controllers\TPC;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TPC extends Controller
{
    //
    public function index(){
        return view('tpc/tpc');
    }
}
