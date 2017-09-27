<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Auth;
use Image;

class UserController extends Controller
{




        public function __construct()
    {
        $this->middleware('auth', ['only' => array('store','index')]);
    }







    public function index()
    {

    	return view ('admin.profile', array('user' => Auth::user() ) );

    }




        public function store(Request $request)
    {





    	if($request->image){


  file::delete('uploads/avatars/' .Auth::user()->image);
    		$image = $request->file('image');
    		$filename = time() . '.' . $image->getClientOriginalExtension();
    		Image::make($image)->resize(300, 300)->save( public_path('uploads/avatars/' . $filename) );

    		$user = Auth::user();
    		$user->image = $filename;
    		$user->save();

	return view ('admin.profile', array('user' => Auth::user() ) );

    	}




    	

    }
}
