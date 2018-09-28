<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = true;
    protected $table = 'posts';

    protected $fillable = ['name','alias','intro','title','description','keyword','image','posttype_id','content','status','user_id'];


}
