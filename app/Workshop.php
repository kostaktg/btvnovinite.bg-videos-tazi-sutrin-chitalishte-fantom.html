<?php

namespace App;


class Workshop extends Model
{
	public function comment()
	{
		return $this->hasMany(CommentWorkshop::class);
	}
	
	public function addComment($text)
	{

		$this->comment()->create([


			'text' => request('text'),
			'workshop_id' => $this->id,
			'user_id' => auth()->id()


			]);
	}



}
