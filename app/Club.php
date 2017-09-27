<?php

namespace App;


class club extends Model
{









		protected $guarded = [''];
    



	public function comment()
	{

		return $this->hasMany(CommentClub::class);


	}





	public function addComment($text)
	{




$this->comment()->create([


	'text' => request('text'),
	'club_id' => $this->id,
	'user_id' => auth()->id()


	]);



	}
    













}
