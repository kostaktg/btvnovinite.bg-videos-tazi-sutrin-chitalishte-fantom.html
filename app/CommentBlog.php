<?php

namespace App;



class CommentBlog extends Model
{
   protected $guarded = [''];


   public function post()
   {

   		return $this->belongsTo(Post::class);

   }

    public function user()
   {

   		return $this->belongsTo(User::class);

   }



}
