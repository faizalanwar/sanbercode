<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function index()
	{
		return view('register');
	}

    public function form(Request $request)
	{

        // dd($request->all());  //to check all the datas dumped from the form
        //if your want to get single element,someName in this case

        //    $first = $request->first; 
        $first = $request['first']; 
        $last = $request['last']; 
        
        return view('welcome',compact('first','last'));
	}

}
