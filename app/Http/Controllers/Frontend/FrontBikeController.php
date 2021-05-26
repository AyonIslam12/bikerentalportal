<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontBikeController extends Controller
{
    public function bikes(){
        return view('frontend.layout.bike.bikes');
    }

    public function singleview(){
        return view('frontend.layout.bike.singleview');
    }
}
