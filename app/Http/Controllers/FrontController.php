<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
	public function login()
	{
        return view('login');
	}

    public function authenticate() 
    {
	    if (Auth::attempt(['email' => Request::get('email'), 'password' => Request::get('password')])) {
	        return redirect('/');
	    } else {
	        return view('login', array('title' => 'Welcome', 'description' => '', 'page' => 'home'));
	    }
	}

	public function logout() 
	{
		Auth::logout();
	    return Redirect::away('login');
	}
}
