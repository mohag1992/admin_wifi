<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LeaveController extends Controller
{
    public function leave(){
    	$leaves = DB::table('leaves')->whereNull('created_at')->get();
    	$data = array();

    	$data['statusCode'] = 200;
    	$data['data']= $leaves;
    	return \Response::json($data);
    }

    public function index(){
    	$month  = date('m');

    	 $leaves = DB::table('leaves')->join('users','leaves.user_id','=','users.id')->select('leaves.*','users.name as user_name')->whereMonth('date','=',$month)->get();
    	 return view('leaves',compact('leaves'));

    }
    public function leaechart(){
        $leaves = DB::table('leaves')->whereNull('created_at')->get();
        return \Response::json($leaves);
    }
}
