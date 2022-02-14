<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Teacher;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\DB;
use Session;
class TeacherController extends Controller
{
    public function index()
    {
        $teacher = [
            'page' => 'index',
            'data' => User::with('teacher')->where('role_id', 2)->get(),
            'department' => Department::get()
        ];
        return view('admin.teacher.index', compact('teacher'));
    }

    public function create()
    {
        $teacher = [
            'page' => 'create',
            'data' => '',
            'department' => Department::get()
        ];
        return view('admin.teacher.index', compact('teacher'));
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'designation' => 'required',
            'type' => 'required|string',
            'address' => 'required',
            'department_id' => 'required|integer',
            'joining_date' => 'required',
            'salary' => 'required',
            'password' => 'required|min:8|max:10',
        ]);

        DB::transaction(function(){

        });
        try{
            $avatar = $request->name . time().'.'. $request->avatar->extension();
            $request->avatar->move(public_path('avatar/'), $avatar);

            $teacher = new User();
            $teacher->name = $request->name;
            $teacher->phone = $request->phone;
            $teacher->role_id = 2;
            $teacher->email = $request->email;
            $teacher->address = $request->address;
            $teacher->avatar = $avatar;
            $teacher->password = Hash::make($request->password);
            $teacher->save();
            Session::put('teacher_id', $teacher->id);
            Session::put('teacher_name', $teacher->name);

            if($teacher->save()){
                $new_teacher = new Teacher();
                $new_teacher->user_id = $teacher->id;
                $new_teacher->department_id = $request->department_id;
                $new_teacher->designation = $request->designation;
                $new_teacher->type = $request->type;
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
            'data' => User::with('teacher')->find($id),
            'department' => Department::get()
        ];
        return view('admin.teacher.index', compact('teacher'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'designation' => 'required',
            'type' => 'required|string',
            'address' => 'required',
            'department_id' => 'required|integer',
            'joining_date' => 'required',
            'salary' => 'required',
        ]);

        try{
            $teacher = User::find($id);
            if($teacher == null){
                return redirect()->back();
            }
            $teacher->name = $request->name;
            $teacher->phone = $request->phone;
            $teacher->role_id = 2;
            $teacher->email = $request->email;
            $teacher->address = $request->address;

            if (isset($request->avatar)){
                if (file_exists('avatar/'.$teacher->avatar)){
                    unlink('avatar/'.$teacher->avatar);
                }

                $updateAvatar= time().'.'. $request->avatar->extension();
                $request->avatar->move('avatar/', $updateAvatar);
                $teacher->avatar = $updateAvatar;
            }

            $update_teacher = Teacher::where('user_id', $id)->first();
            $update_teacher->user_id = $teacher->id;
            $update_teacher->department_id = $request->department_id;
            $update_teacher->joining_date = $request->joining_date;
            $update_teacher->designation = $request->designation;
            $update_teacher->type = $request->type;
            $update_teacher->salary = $request->salary;
            $update_teacher->save();

            $teacher->save();
            return redirect()->back()->withSuccess('Teacher has been updated.');
        }catch(Exception $exception){
            return redirect()->back()->withError($exception->getMessage());
        }
    }

    public function destroy($id)
    {
        $teacher = User::find($id);
        if($teacher == null){
            return redirect()->back();
        }
        if (file_exists('avatar/'.$teacher->avatar)){
            unlink('avatar/'.$teacher->avatar);
        }
        $teacher->delete();
        return redirect()->back()->withSuccess('Teacher has been deleted.');
    }


    //============== Stuff ==================//

    public function stuff_index()
    {
        $stuff = [
            'page' => 'index',
            'data' => User::with('teacher')->where('role_id', 4)->get(),
            'department' => Department::get()
        ];
        return view('admin.stuff.index', compact('stuff'));
    }

    public function stuff_create()
    {
        $stuff = [
            'page' => 'create',
            'data' => '',
            'department' => Department::get()
        ];
        return view('admin.stuff.index', compact('stuff'));
    }

    public function stuff_store(Request $request)
    {
        //dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'address' => 'required',
            'department_id' => 'required|integer',
            'joining_date' => 'required',
            'salary' => 'required',
            'password' => 'required|min:8|max:10',
        ]);

        try{
            $avatar = $request->name . time().'.'. $request->avatar->extension();
            $request->avatar->move(public_path('avatar/'), $avatar);

            $stuff = new User();
            $stuff->name = $request->name;
            $stuff->phone = $request->phone;
            $stuff->role_id = 4;
            $stuff->email = $request->email;
            $stuff->address = $request->address;
            $stuff->avatar = $avatar;
            $stuff->password = Hash::make($request->password);
            $stuff->save();
            Session::put('stuff_id', $stuff->id);
            Session::put('stuff_name', $stuff->name);

            if($stuff->save()){
                $new_stuff = new Teacher();
                $new_stuff->user_id = $stuff->id;
                $new_stuff->department_id = $request->department_id;
                $new_stuff->designation = 'stuff';
                $new_stuff->joining_date = $request->joining_date;
                $new_stuff->salary = $request->salary;
                $new_stuff->save();
            }
            return redirect()->back()->withSuccess('Stuff has been added.');
        }catch(Exception $exception){
            return redirect()->back()->withError($exception->getMessage());
        }
    }

    public function stuff_edit($id)
    {
        $stuff = [
            'page' => 'edit',
            'data' => User::with('teacher')->find($id),
            'department' => Department::get()
        ];
        return view('admin.stuff.index', compact('stuff'));
    }

    public function stuff_update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'address' => 'required',
            'department_id' => 'required|integer',
            'joining_date' => 'required',
            'salary' => 'required',
        ]);

        try{
            $stuff = User::find($id);

            if($stuff == null){
                return redirect()->back();
            }

            $stuff->name = $request->name;
            $stuff->phone = $request->phone;
            $stuff->role_id = 4;
            $stuff->email = $request->email;
            $stuff->address = $request->address;

            if (isset($request->avatar)){
                if (file_exists('avatar/'.$stuff->avatar)){
                    unlink('avatar/'.$stuff->avatar);
                }

                $updateAvatar= time().'.'. $request->avatar->extension();
                $request->avatar->move('avatar/', $updateAvatar);
                $stuff->avatar = $updateAvatar;
            }

            $update_stuff = Teacher::where('user_id', $id)->first();
            $update_stuff->user_id = $stuff->id;
            $update_stuff->department_id = $request->department_id;
            $update_stuff->joining_date = $request->joining_date;
            $update_stuff->designation = 'stuff';
            $update_stuff->salary = $request->salary;
            $update_stuff->save();

            $stuff->save();
            return redirect()->back()->withSuccess('Stuff has been updated.');
        }catch(Exception $exception){
            return redirect()->back()->withError($exception->getMessage());
        }
    }

    public function stuff_destroy($id)
    {
        $stuff = User::find($id);



        foreach (Teacher::where('user_id', $stuff->id)->get() as $the_teacher) {
            $the_teacher->delete();
        }

        $stuff->delete();
        return redirect()->back()->withSuccess('Stuff has been deleted.');
    }
}
