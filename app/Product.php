<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = true;
    protected $table = 'products';

    protected $fillable = ['name','alias','title','keyword','description','content','compositions','styles','properties','unitsinstock','unitprice','unitsonorder','review_id','supplier_id','status','user_id','category_id'];

    public function Order_details()
    {
        return $this->belongsToMany('App\Order_detail');
    }
}
