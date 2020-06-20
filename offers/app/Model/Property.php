<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    public $table='properties';
    public $timestamp='true';
    public function propcat()
    {
    	return $this->belongsTo('App\Model\PropCat','propcat_id');
    }
    public function propmul()
    {
        return $this->hasMany('App\Model\PropMulimage','property_id');
    }
}
