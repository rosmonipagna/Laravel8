<?php

namespace App\Http\Controllers\BBQ;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BBQ extends Controller
{
    //
    public function index(){
        return view('bbq/bbq');
    }
}
