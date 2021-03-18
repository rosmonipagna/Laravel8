<?php

namespace App\Http\Controllers\Brands\DQ;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DQ extends Controller
{
    //
    public function index(){
        return view('brands/dq/dq');
    }
}
