<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Users extends Controller
{
    //
    public function index(){
        return view('usr/usr');
    }
}
