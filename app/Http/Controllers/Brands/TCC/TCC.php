<?php

namespace App\Http\Controllers\Brands\TCC;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TCC extends Controller
{
    //
    public function index(){
        return view('brands/tcc/tcc');
    }
}
