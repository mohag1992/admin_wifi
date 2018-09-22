<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserController extends Controller
{
    public function index(){
    	$transdate = date('m', time());
       

       $month = date('m', strtotime($transdate));
// ->join('attendance','users.id','=','attendance.user_id')->whereMonth('current_date' , Carbon::today()->month)
    	$users = DB::table('users')->get();
    	dd($users);

    	
    	return view('employee',compact('users'));
    }
}
