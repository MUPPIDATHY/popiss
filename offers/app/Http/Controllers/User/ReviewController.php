<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Review;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $re=new Review;
        $re->business_id=$request->input('ident');
        $re->name=$request->input('name');
        $re->email=$request->input('email');
        $re->heading=$request->input('heading');
        $re->message=$request->input('message');
        $re->rating=$request->input('rating');
        $re->save();
        return redirect()->back();
    }
}
