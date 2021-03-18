<?php

namespace App\Http\Controllers\Brands\TPC;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TPC extends Controller
{
    //
    public function index(){
        return view('brands/tpc/tpc');
    }
}
