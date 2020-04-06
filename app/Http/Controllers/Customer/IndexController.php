<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Home_slider;
class IndexController extends Controller
{

    public function index(){

        $sliders=Home_slider::where('active','=',1)->get();
        return view('Customer.home.index',compact('sliders'));
    }
}
