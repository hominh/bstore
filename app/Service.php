<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
  public $timestamps = true;
  protected $table = 'services';

  protected $fillable = ['name','title','alias','keyword','description','content','image','icon','user_id'];
}
