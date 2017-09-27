<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Workshop;
use App\Blog;

class ContactController extends Controller
{
    public function index(){

   $blogs = Blog::get();
    	 return view('pages.contact',compact('blogs'));
    }
}
