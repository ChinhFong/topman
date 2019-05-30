<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $fillable = [
      'user_id',
      'headerkh',
      'desckh',
      'descen',
      'headeren',
      'descjp',
      'headerjp',
  ];
  public function user(){
    return $this->belongsTo('App\User');
  }
  public function photos(){
    return $this->hasMany('App\Photo');
  }
}
