<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{ 
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'body', 'active', 'user_id', 'published_at'
    ]; 

  // returns the instance of the user who is author of that post
  public function author()
  {
    return $this->belongsTo('App\User','user_id');
  }
}
