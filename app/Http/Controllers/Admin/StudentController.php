<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Student;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Hash;
use Session;

class StudentController extends Controller
{
    public function index()
    {
        $student = [
            'page' => 'index',
            'data' => User::with('student')->where('role_id', 3)->get(),
            'department' => Department::get()
        ];
        return view('admin.student.index', compact('student'));
    }

    public function create()
    {
        $student = [
            'page' => 'create',
            'data' => '',
            'department' => Department::get()
        ];
        return view('admin.student.index', compact('student'));
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'roll' => 'required',
            'address' => 'required',
            'department_id' => 'required|integer',
            'shift' => 'required',
            'password' => 'required|min:8|max:10',
        ]);

        try{
            $student = new User();
            $student->name = $request->name;
            $student->phone = $request->phone;
            $student->role_id = 3;
            $student->email = $request->email;
            $student->address = $request->address;
            $student->password = Hash::make($request->password);
            $student->save();
            Session::put('student_id', $student->id);
            Session::put('student_name', $student->name);

            if($student->save()){
                $new_student = new Student();
                $new_student->user_id = $student->id;
                $new_student->department_id = $request->department_id;
                $new_student->roll = $request->roll;
                $new_student->shift = $request->shift;
                $new_student->save();
            }
            return redirect()->back()->withSuccess('Student has been added.');
        }catch(Exception $exception){
            return redirect()->back()->withError($exception->getMessage());
        }
    }

    public function edit($id)
    {
        $student = [
            'page' => 'edit',
            'data' => User::with('student')->find($id),
            'department' => Department::get()
        ];
        return view('admin.student.index', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'roll' => 'required',
            'address' => 'required',
            'department_id' => 'required|integer',
            'shift' => 'required',
        ]);

        try{
            $student = User::find($id);
            $student->name = $request->name;
            $student->phone = $request->phone;
            $student->role_id = 3;
            $student->email = $request->email;
            $student->address = $request->address;
            $student->save();

            if(!empty($student)){
                $update_student = Student::where('user_id', $id)->first();
                $update_student->user_id = $student->id;
                $update_student->department_id = $request->department_id;
                $update_student->roll = $request->roll;
                $update_student->shift = $request->shift;
                $update_student->save();
            }
            return redirect()->back()->withSuccess('Student has been updated.');
        }catch(Exception $exception){
            return redirect()->back()->withError($exception->getMessage());
        }
    }

    public function destroy($id)
    {
        $student = User::find($id);
        $student->delete();
        return redirect()->back()->withSuccess('Student has been deleted.');
    }
}
