<?php

namespace App\Http\Controllers;

use App\Blog;

use App\CommentBlog;

class CommentBlogController extends Controller
{



		protected $errors = [

		'text.required'   => 'Трябва да напишете коментар. ',
		'text.min'        => 'Коментара трябва да съдържа поне 4 символа'

		];




	    public function __construct()
    {
        $this->middleware('auth', ['only' => 'store']);
    }


			public function store(Blog $id)
	{

		$this->validate(request(), [

		'text' => 'required|min:4',

		], $this->errors);





			$id->addComment(request('text'));



		    return back();

	}





}
