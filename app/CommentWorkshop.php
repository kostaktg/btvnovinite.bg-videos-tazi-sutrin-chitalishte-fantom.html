<?php

namespace App;


class CommentWorkShop extends Model
{

   public function post()
   {

   		return $this->belongsTo(Post::class);

   }

    public function user()
   {

   		return $this->belongsTo(User::class);

   }

}
