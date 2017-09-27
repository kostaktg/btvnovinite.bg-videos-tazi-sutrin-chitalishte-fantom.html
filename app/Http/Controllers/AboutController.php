<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Workshop;
use App\Blog;

class AboutController extends Controller
{
        public function index(){

   $blogs = Blog::orderBy('name', 'desc')->take(3)->get();
   $workshops = Workshop::orderBy('name', 'desc')->take(3)->get();


    	    return view('pages.about' , compact('blogs','workshops'));
    }
}
