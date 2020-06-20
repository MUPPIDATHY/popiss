<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BusCat extends Model
{
    public $table='bus_cats';
    public $timestamp='true';
    public function business()
    {
    	return $this->hasMany('App\Model\Business');
    }
}
