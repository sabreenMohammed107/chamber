<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class MasterAdminController extends Controller
{
    public function __construct()
    {
        
       $this->middleware('auth:admin');
    }
    public function index(){
   
        return view('Admin.home.index');
    }
}
