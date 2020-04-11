<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    // protected $fillable = [
    //     'title', 'description', 'body', 'user_id', 'topic_id', 'slug'
    // ];
    protected $guarded = [];
    
    
    public function user(){
      return $this->belongsTo(User::class);
    }
    
    public function topic(){
      return $this->belongsTo(Topic::class);
    }
    
    //Override id as keyname to slug.
    public function getRouteKeyName(){
      return 'slug';
    }
}
