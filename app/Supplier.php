<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public $timestamps = true;
    protected $table = 'suppliers';
    protected $fillable = ['compannyame','contacname','contactitle','address','city','region','postalcode','country','phone','fax','website','user_id'];

    public function product()
    {
    	return $this->hasMany('App\Product');
    }
}
