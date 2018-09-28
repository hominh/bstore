<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  public $timestamps = true;
  protected $table = 'images';

  protected $fillable = ['image','user_id'];
}
