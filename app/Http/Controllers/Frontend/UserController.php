<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registration(){
        return view('frontend.layout.user.registrationForm');
    }
}
