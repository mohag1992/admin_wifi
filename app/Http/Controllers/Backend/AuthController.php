<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function showlogin(){
    	return view('backend.login');
    }
    public function register(){
    	return view('backend.register');
    }
    public function dologin(Request $request){
    	
    	$user = $request->all();
    	$credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect('/dashboard');
        }else{
        	return back()->with("error","your credentials doesn't match");
        }
    }

    public function dashboard(Request $request){
    	$events = DB::table('events')->count();
    	
    	return view('dashboard',compact('events')); 	
    }
}
