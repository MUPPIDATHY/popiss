<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Model\BusCat;
use App\Model\PropCat;
use App\Model\Slider;
use App\Model\Offers;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $buscat=BusCat::all();
        $propcat=PropCat::all();
        $offer=Offers::where('status','active')->get()->take(4);
        $slider=Slider::all();
        return view('list.index',compact('buscat','propcat','slider','offer'));
    }
}
