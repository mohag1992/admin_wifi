<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
   public function create(){
   	return view('event');
   }

   public function store(Request $request){
   	 $events = (object)$request->all();

   	 $insert=DB::table('events')->insert([
   	 	'title'=>$events->title,
   	 	'description' =>$events->description,
   	 	'speaker'=>$events->speaker,
   	 	'start_date'=>$events->start_date,
   	 	'start_time'=>$events->start_time
   	 ]);
   	 if($insert){
   	 	return redirect()->action('Backend\EventController@index');
   	 }
   }

   public function index(){

   	 $events = DB::table('events')->whereNull('deleted_at')->get();
   	 
   	 return view('eventlist',compact('events'));
   }

   public function edit($id){
     $event = DB::table('events')->where('id',$id)->first();
     return view('event',compact('event'));
   }

   public function update(Request $request){
   	 $event = (object)$request->all();
   	
   	 $id = $event->id;
   	 
   	 	 $update = DB::table('events')->where('id',$id)->update([
   	 	'title'=>$event->title,
   	 	'description'=>$event->description,
   	 	'speaker'=>$event->speaker,
   	 	'start_date'=>$event->start_date,
   	 	'start_time'=>$event->start_time
   	 ]);
   	 	
   	
   	 
   	 	return redirect()->action('Backend\EventController@index');
   	
   }

   public function geteventbyweek(){
   	 $date = date('Y-m-d');

   	 $timestamp = strtotime($date);
		$days = array();
		for ($i = 0; $i < 7; $i++) {
		    $days[] = date('Y-m-d', $timestamp);
		    $timestamp = strtotime('+1 day', $timestamp);
		}
		
	  $events = DB::table('events')->whereIn('start_date',$days)->get();

	  $Respon = array();
	  $Respon['statusCode'] = 200;
	  $Respon['data'] = $events;

	 return \Response::json($Respon);
   }
}
