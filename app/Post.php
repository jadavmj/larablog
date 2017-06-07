<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{  
  // returns the instance of the user who is author of that post
  public function author()
  {
    return $this->belongsTo('App\User','user_id');
  }
}
