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
         $attendances = DB::table('attendance')->get();

    	$users = DB::table('users')->where('role_id',2)->get();
        $userAry = array();
    	foreach($users as $user){

    		$attend = DB::table('attendance')->where('user_id',$user->id)->count();
            $absent = 31-$attend;
            $persence =round(($attend/31) * 100 );
            
            if($absent == 0){
             $user->percetage = 0;  
            }else{
              $user->percetage = $persence;
            }
            $user->absent = $absent;
            $user->count = $attend;
    	}
        
        

    	
    	return view('employee',compact('users'));
    }
}
