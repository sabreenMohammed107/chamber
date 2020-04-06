<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Board_member;
use App\Models\Board_director;
use DB;
class BoardController extends Controller
{
    public function index(){
        //get current
       

        $currentBoard=Board_director::where('current','=',0)->first();
        $prevBoard=Board_director::where('current','=',1)->first();
        $mastrBoard=Board_member::where('board_directors_id','=',$currentBoard->id)->get();
        $subBoard=Board_member::where('board_directors_id','=',$prevBoard->id)->get();
        //get all
        $oldestList=Board_director::where('current','=',2)->get();
          return view('Customer.board.index',compact('oldestList','prevBoard','currentBoard','mastrBoard','subBoard'));
    }
}
