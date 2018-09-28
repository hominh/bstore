<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public $timestamps = true;
    protected $table = 'brands';

    protected $fillable = ['name','alias','image','user_id'];

}
