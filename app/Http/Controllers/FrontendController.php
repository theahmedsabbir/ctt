<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Installer;
use App\Models\Order;
use App\Models\SpecialOffer;

class FrontendController extends Controller
{
    public function home(){
        return view('frontend.home');
    }
    public function aboutUs(){
        return view('frontend.aboutUs');
    }
}