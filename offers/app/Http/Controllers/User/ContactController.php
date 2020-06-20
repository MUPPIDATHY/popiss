<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('list.contact');
    }
    public function store(Request $request)
    {
        $con=new Contact;
        $con->name=$request->input('name');
        $con->email=$request->input('email');
        $con->phoneno=$request->input('phoneno');
        $con->subject=$request->input('subject');
        $con->message=$request->input('message');
        $con->save();
    }
}
