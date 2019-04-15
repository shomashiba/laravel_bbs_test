<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
      'title',
      'body',
    ];

    public function comments()
    {
      return $this->hasMany('App\Comment');//1対多の関係を紐付けるメソッド
    }
}
