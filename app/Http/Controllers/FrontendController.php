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
    public function contact(){
        return view('frontend.contact');
    }
    public function administration(){
        return view('frontend.administration');
    }
    public function academic(){
        return view('frontend.academic');
    }
    public function department(){
        return view('frontend.department');
    }
    public function admission(){
        return view('frontend.admission');
    }
    public function gallery(){
        return view('frontend.gallery');
    }
}