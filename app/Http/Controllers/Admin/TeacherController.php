<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teacher = [
            'page' => 'index',
            'data' => Teacher::with('user')->get()
        ];
        return view('admin.teacher.index', compact('teacher'));
    }

    public function create()
    {
        $teacher = [
            'page' => 'create',
            'data' => ''
        ];
        return view('admin.teacher.index', compact('teacher'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'designation' => 'required',
            'address' => 'required',
            'department_id' => 'required|integer',
            'joining_date' => 'required',
            'salary' => 'required',
            'password' => 'required|min:8|max:10',
        ]);

        try{
            $teacher = new User();
            $teacher->name = $request->name;
            $teacher->phone = $request->phone;
            $teacher->role_id = 2;
            $teacher->email = $request->email;
            $teacher->address = $request->address;
            $teacher->password = bcrypt($request->password);
            $teacher->save();

            if(!empty($teacher)){
                $new_teacher = new Teacher();
                $new_teacher->user_id = $teacher->id;
                $new_teacher->department_id = $request->department_id;
                $new_teacher->joining_date = $request->joining_date;
                $new_teacher->salary = $request->salary;
                $new_teacher->save();
            }
            return redirect()->back()->withSuccess('Teacher has been added.');
        }catch(Exception $exception){
            return redirect()->back()->withError($exception->getMessage());
        }
    }

    public function edit($id)
    {
        $teacher = [
            'page' => 'edit',
            'data' => User::find($id)
        ];
        return view('admin.teacher.index', compact('teacher'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'designation' => 'required',
            'address' => 'required',
            'department_id' => 'required|integer',
            'joining_date' => 'required',
            'salary' => 'required',
        ]);

        try{
            $teacher = User::find($id);
            $teacher->name = $request->name;
            $teacher->phone = $request->phone;
            $teacher->role_id = 2;
            $teacher->email = $request->email;
            $teacher->address = $request->address;
            $teacher->save();

            if(!empty($teacher)){
                $update_teacher = Teacher::where('user_id', $id)->first();
                $update_teacher->user_id = $teacher->id;
                $update_teacher->department_id = $request->department_id;
                $update_teacher->joining_date = $request->joining_date;
                $update_teacher->salary = $request->salary;
                $update_teacher->save();
            }
            return redirect()->back()->withSuccess('Teacher has been updated.');
        }catch(Exception $exception){
            return redirect()->back()->withError($exception->getMessage());
        }
    }

    public function destroy($id)
    {
        $teacher = User::find($id);
        $teacher->delete();
        return redirect()->back()->withSuccess('Teacher has been deleted.');
    }
}
