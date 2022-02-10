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
    public function administrative(){
        return view('frontend.administrative');
    }
    public function faculty(){
        return view('frontend.faculty');
    }
    public function chairman(){
        return view('frontend.chairman');
    }
    public function principal(){
        return view('frontend.principal');
    }
    public function academic(){
        return view('frontend.academic');
    }


    public function lab(){
        return view('frontend.facilities.lab');
    }
    public function hostel(){
        return view('frontend.facilities.hostel');
    }
    public function scholarship(){
        return view('frontend.facilities.scholarship');
    }
    public function job(){
        return view('frontend.facilities.job');
    }


    public function admissionCircular(){
        return view('frontend.admission.admissionCircular');
    }
    public function admissionForm(){
        return view('frontend.admission.admissionForm');
    }
    public function admissionRequirement(){
        return view('frontend.admission.admissionRequirement');
    }
    public function prospectus(){
        return view('frontend.admission.prospectus');
    }
    public function fee(){
        return view('frontend.admission.fee');
    }


    public function department($departmentSlug){
        return view('frontend.dynamic.department_single');
    }
    public function admission(){
        return view('frontend.admission');
    }
    public function gallery(){
        return view('frontend.gallery');
    }
}