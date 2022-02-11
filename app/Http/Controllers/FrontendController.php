<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\File;
use App\Models\Installer;
use App\Models\Order;
use App\Models\SpecialOffer;
use Illuminate\Http\Request;

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


    public function department($departmentSlug){
        $department = Department::where('slug', $departmentSlug)->first();

        if ($department == null) {
            return redirect()->back();
        }

        return view('frontend.dynamic.department_single', compact('department'));
    }
    public function admission(){
        return view('frontend.admission');
    }
    public function gallery($type){
        $files = File::where('type', $type)->get();
        return view('frontend.gallery', compact('files', 'type'));
    }
    public function list($type){
        $files = File::where('type', $type)->get();

        return view('frontend.dynamic.list', compact('files', 'type'));
    }
}