<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Account;

use Str;

class AccountController extends Controller
{
    public function index(){
    	return view('admin.account.index');
    }
    public function edit($id){
    	$account = Account::find($id);
    	if($account==null){
    		return redirect()->back();
    	}
    	return view('admin.account.edit', compact('account'));
    }
    public function update(Request $request, $id){

    	$account = Account::find($id);

    	if($account==null){
    		return redirect()->back();
    	}

        $account->semester = $request->semester;
        $account->total = $request->total;
        $account->paid = $request->paid;
        $account->due = $account->total - $account->paid;

	    $account->save();

	    session()->flash('Success', 'Account updated successfully');
	    return redirect('admin/account/index');

	    // product image upload 
    }
    public function delete(Request $r, $id){

    	$account = Account::find($id);

    	if($account==null){
    		return redirect()->back();
    	}

    	// delete this account
    	$account->delete();

    	session()->flash('Success', 'Account deleted successfully');
    	return redirect('admin/account/index');
    }
}
