<?php

namespace App\Http\Controllers;

use App\Club;

class CommentClubController extends Controller
{








	
		protected $errors = [

		'text.required'   => 'Трябва да напишете коментар. ',
		'text.min'        => 'Коментара трябва да съдържа поне 4 символа'

		];




	    public function __construct()
    {
        $this->middleware('auth', ['only' => 'store']);
    }


			public function store(Club $id)
	{

		$this->validate(request(), [

		'text' => 'required|min:4',

		], $this->errors);





			$id->addComment(request('text'));



		    return back();

	}
    












}
