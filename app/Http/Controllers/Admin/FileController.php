<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\File;

use Str;

class FileController extends Controller
{
    public function index(){
    	return view('admin.file.index');
    }
    public function create(){
    	return view('admin.file.create');		
    }
    public function store(Request $r){

    	$r->validate([
			'image'          => 'mimes:jpeg,jpg,png,bmp,gif',
			'file'          => 'mimes:pdf,doc,docx,ppt,pptx,txt,xls,xlsx',
    	]);

        // dd('done');

	    $file = new File;

		$file->type        = $r->type;     
		$file->title       = $r->title;   
		$file->link        = $r->link;     
		$file->description = $r->description;  


        if (isset($r->image)) { 
            $image = $r->image;
            $imageName = $r->type . ' ' . uniqid() . time().'_'.'.'. $image->extension();
            $image->move('file/', $imageName );   
			$file->image       = $imageName;  
        }


        if (isset($r->file)) { 
            $rFile = $r->file;
            $rFileName = $r->type . ' ' . uniqid() . time().'_'.'.'. $rFile->extension();
            $rFile->move('file/', $rFileName );    
			$file->file        = $rFileName;    
        }


	    $file->save();

	    session()->flash('Success', 'Post uploaded successfully');
	    return redirect('admin/post/index');

	    // product image upload 
    }
    public function edit($id){
    	$file = File::find($id);
    	if($file==null){
    		return redirect()->back();
    	}
    	return view('admin.file.edit', compact('file'));
    }
    public function update(Request $r, $id){

    	$r->validate([
			'image'          => 'mimes:jpeg,jpg,png,bmp,gif',
			'file'          => 'mimes:pdf,doc,docx,ppt,pptx,txt,xls,xlsx',
    	]);

    	$file = File::find($id);
    	if($file==null){
    		return redirect()->back();
    	}

		$file->type        = $r->type;     
		$file->title       = $r->title;   
		$file->link        = $r->link;     
		$file->description = $r->description;  


        if (isset($r->image)) {


	        if ($file->image && file_exists('file/' . $file->image)) {
	            unlink('file/' . $file->image);
	        }


            $image = $r->image;
            $imageName = $r->type . ' ' . uniqid() . time().'_'.'.'. $image->extension();
            $image->move('file/', $imageName );   
			$file->image       = $imageName;  
        }


        if (isset($r->file)) { 
	        if ($file->file && file_exists('file/' . $file->file)) {
	            unlink('file/' . $file->file);
	        }

            $rFile = $r->file;
            $rFileName = $r->type . ' ' . uniqid() . time().'_'.'.'. $rFile->extension();
            $rFile->move('file/', $rFileName );    
			$file->file        = $rFileName;    
        }

	    $file->save();

	    session()->flash('Success', 'File updated successfully');
	    return redirect('admin/post/index');

	    // product image upload 
    }
    public function delete(Request $r, $id){

    	$file = File::find($id);

    	if($file==null){
    		return redirect()->back();
    	}

        if (file_exists('file/' . $file->image)) {
            unlink('file/' . $file->image);
        }

        if (file_exists('file/' . $file->file)) {
            unlink('file/' . $file->file);
        }

    	// delete this file
    	$file->delete();

    	session()->flash('Success', 'File deleted successfully');
    	return redirect('admin/post/index');
    }
}
