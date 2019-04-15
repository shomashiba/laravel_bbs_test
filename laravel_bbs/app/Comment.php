<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  protected $fillable = [
      'body',
  ];

  public function post()
  {
      return $this->belongsTo('App\Post');//Post(投稿)に従属している関係性を表すメソッド
  }
}
