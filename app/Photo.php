<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $fillable=[
        'news_id','path'
    ];

    public function news(){
      return $this->belongsTo('App\News');
    }
}
