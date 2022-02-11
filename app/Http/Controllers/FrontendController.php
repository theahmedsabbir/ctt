<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\File;
use App\Models\Installer;
use App\Models\Order;
use App\Models\SpecialOffer;
use App\Models\User;
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
        $teacher = User::where('role_id', 2)->orderBy('created_at', 'desc')->get();
        return view('frontend.faculty', compact('teacher'));
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
    public function gallery(){
        return view('frontend.gallery');
    }
    public function list($type){
        $files = File::where('type', $type)->get();

        return view('frontend.dynamic.list', compact('files', 'type'));
    }
}
