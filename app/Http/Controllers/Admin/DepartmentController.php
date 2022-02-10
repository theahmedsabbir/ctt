<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Exception;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $department = [
            'page' => 'index',
            'data' => Department::get()
        ];
        return view('admin.department.index', compact('department'));
    }

    public function create()
    {
        $department = [
            'page' => 'create',
            'data' => ''
        ];
        return view('admin.department.index', compact('department'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required',
            'description' => 'required'
        ]);

        try{
            $departmentImage = time().'.'. $request->image->extension();
            $request->image->move(public_path('department'), $departmentImage);

            $department = new Department();
            $department->name = $request->name;
            $department->slug = str_replace(' ', '-', strtolower($request->name));
            $department->description = $request->description;
            $department->image = $departmentImage;
            $department->save();
            return redirect()->back()->withSuccess('Department has been created.');
        }catch(Exception $exception){
            return redirect()->back()->withError($exception->getMessage());
        }
    }

    public function edit($id)
    {
        $department = [
            'page' => 'edit',
            'data' => Department::find($id)
        ];
        return view('admin.department.index', compact('department'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);

        try{
            $department = Department::find($id);
            if (isset($request->image)){
                if ($department->image){
                    file_exists(('department/').$department->image);
                }else {
                    unlink(public_path('/department/').$department->image);
                }
                $updateImage = time().'.'. $request->image->extension();

                $request->image->move(public_path('department'), $updateImage);
                $department->image = $updateImage;
            }

            $department->name = $request->name;
            $department->slug = str_replace(' ', '-', strtolower($request->name));
            $department->description = $request->description;
            $department->save();
            return redirect()->back()->withSuccess('Department has been updated.');
        }catch(Exception $exception){
            return redirect()->back()->withError($exception->getMessage());
        }
    }

    public function destroy($id)
    {
        $department = Department::find($id);
        $department->delete();
        return redirect()->back()->withSuccess('Department has been deleted.');
    }
}