<?php

namespace App;



class Blog extends Model
{

	protected $guarded = [''];
    



	public function comment()
	{

		return $this->hasMany(CommentBlog::class);


	}





	public function addComment($text)
	{




$this->comment()->create([


	'text' => request('text'),
	'blog_id' => $this->id,
	'user_id' => auth()->id()


	]);



	}


}
