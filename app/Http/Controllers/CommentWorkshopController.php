<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CommentWorkshop;

use App\Workshop;

class CommentWorkshopcontroller extends Controller
{


			protected $errors = [

		'text.required'   => 'Трябва да напишете коментар. ',
		'text.min'        => 'Коментара трябва да съдържа поне 4 символа'

		];




	    public function __construct()
    {
        $this->middleware('auth', ['only' => array('store')]);
    }
    
		public function store(Workshop $id)
	{

		$this->validate(request(), [

		'text' => 'required|min:4',

		], $this->errors);

$id->addComment(request('text'));



		    return back();
}


}