<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BusMulimage extends Model
{
    public $table='bus_mulimages';
    public $timestamp='true';
    public function bus()
    {
    	return $this->belongsTo('App\Model\Business','business_id');
    }
}
