<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PropMulimage extends Model
{
    public $table='prop_mulimages';
    public $timestamp='true';
    public function propertii()
    {
    	return $this->belongsTo('App\Model\Property','property_id');
    }
}
