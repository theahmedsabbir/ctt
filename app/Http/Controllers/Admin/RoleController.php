<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{   

    public function index(){
        return view('admin.role.index');
    }

    public function update(Request $request, $role_id){
    	// return Role::find($role_id);
    	// return $request->all();

        $role = Role::find($role_id);
        $role->permissions = json_encode($request->permissions);

        $role->save();
        session()->flash('Success', 'Role updated successfully');
        return redirect()->back();
    }

}
