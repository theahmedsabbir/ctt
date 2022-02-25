<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Session;
use Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // get url after admin/
        $url_explode = explode('/', Request::path());
        $url_module = $url_explode[1]; //current route word after admin/
        $url_action = array_key_exists(2, $url_explode) ? $url_explode[2] : false; //url action ase kina

        $permitted_modules = ['dashboard', 'logout']; //default for all 

        // if in permitted module or role is admin, let the request go 
        if ( Session::get('admin_role') == 'admin' || in_array($url_module, $permitted_modules)) {
            return $next($request);
        }

        // if above is false
        // if url_module is in the role permission set, then let it proceed
        $role = Role::where('role', Session::get('admin_role'))->first();

        $teacher_student_roles = ['teacher', 'student'];

        // dd(json_decode($role->permissions));
        if($role != null){
            $role_permissions = json_decode($role->permissions); //current admin er role permissions

            //ei role er permission er moddhe ei url er module ase kina 
            $is_module_permitted = $role_permissions && in_array($url_module, $role_permissions);

            //url action thakle, teacher/student er jonno shudhu index pabe
            $is_teacher_or_student = in_array($role->role, $teacher_student_roles);
            $is_action_permitted = $url_action != false && $url_action == 'index';

            // jodi teacher or student hoi then action check korbe
            if ( !$is_module_permitted || ($is_teacher_or_student && !$is_action_permitted) ) { 
                session()->flash('Error', 'You are not permitted to access this url.');
                return redirect()->back();                
            }

            return $next($request); //else let it go
        }else{
            session()->flash('Error', 'Something went wrong !! Please try again.');
            return redirect()->back();
        }

        // if comes here .. return him back
        session()->flash('Error', 'Something went wrong !! Please try again.');
        return redirect()->back();
    }
}
