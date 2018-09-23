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
    	$users  = DB::table('users')->count();
        $month  = date('m');
        $attendace = DB::table('attendance')->whereMonth('current_date',$month)->get();
        // $date = new \DateTime('2000-01-01');
        // $result = $date->format('Y-m-d H:i:s');
        // $monthAry = $this->getWeekDates($result);
    	return view('dashboard',compact('events','users')); 	
    }

   // public function getWeekDates(DateTimeInterface $date, $format = 'Y-m-d') {
   //        $dt        = \DateTimeImmutable::createFromMutable($date);
   //        $first_day = $dt->modify('first day of this month');
   //        $last_day  = $dt->modify('last day of this month');
   //        $period    = new \DatePeriod(
   //          $first_day,
   //          \DateInterval::createFromDateString('sunday this week'),
   //          $last_day,
   //          \DatePeriod::EXCLUDE_START_DATE
   //        );

   //        $weeks = [$first_day->format($format)];
   //        foreach ($period as $d) {
   //          $weeks[] = $d->modify('-1 day')->format($format);
   //          $weeks[] = $d->format($format);
   //        }
   //        $weeks[] = $last_day->format($format);

   //        return array_chunk($weeks, 2);
   //      }
}
