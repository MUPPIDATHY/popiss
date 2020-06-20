<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Offers extends Model
{
    public $table='offers';
    public $timestamp='true';
    public function buus()
    {
    	return $this->belongsTo('App\Model\Business','business_id');
    }
}
