<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Depatrtment_meeting;
class ScheduleController extends Controller
{
    
    public function index(){

        $schedules=Depatrtment_meeting::orderBy("created_at", "Desc")->paginate(6);
       
        return view('Customer.schedule.index',compact('schedules'));
    }
    
    function fetch_categorySchedule(Request $request)
    {
     

     if($request->ajax())
     {
        $schedules=Depatrtment_meeting::orderBy("created_at", "Desc")->paginate(6);
      
        return view('Customer.schedule.indexSchedule',compact('schedules'))->render();
     }
    }
}
