<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PropCat extends Model
{
    public $table='prop_cats';
    public $timestamp='true';
    public function prop()
    {
    	return $this->hasMany('App\model\Property','propcat_id');
    }

}
