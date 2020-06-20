<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $table='reviews';
    public $timestamp='true';
    public function reviews()
    {
    	return $this->belongsTo('App\Model\Business','business_id');
    }
}
