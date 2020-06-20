<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Offers;

class OfferController extends Controller
{
    public function index()
    {
        $offer=offers::where('status','active')->get();
        return view('list.offers',compact('offer'));
    }
}
