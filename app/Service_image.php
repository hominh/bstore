<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service_image extends Model
{
  public $timestamps = true;
  protected $table = 'service_image';

  protected $fillable = ['service_id','image_id'];
}
