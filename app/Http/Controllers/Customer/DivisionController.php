<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Depatrtment;
use App\Models\Depatrtment_board_member;
use App\Models\Department_board_director;
use App\Models\Depatrtment_register;
use App\Models\Depatrtment_meeting;
use App\Models\Department_news;
use App\Models\Related_department_news;
use App\Models\Department_gallery;
use App\Models\Depatrtment_meeting_gallery;
class DivisionController extends Controller
{
    public function index()
    {

        $devisions = Depatrtment::orderBy("created_at", "Desc")->paginate(10);

        return view('Customer.division.index', compact('devisions'));
    }

    function fetch_devision(Request $request)
    {
        $devisions = Depatrtment::orderBy("created_at", "Desc")->paginate(10);


        return view('Customer.division.indexList', compact('devisions'))->render();
    }
    public function devisionDetails($id)
    {

        $mastrBoard = [];
        $subBoard = [];


        $divisionObj = Depatrtment::where("id", '=', $id)->first();

        $currentBoard = Department_board_director::where('department_id', '=', $id)->where('current', '=', 0)->first();


        $prevBoard = Department_board_director::where('department_id', '=', $id)->where('current', '=', 1)->first();
        if ($currentBoard != null) {
            $mastrBoard = Depatrtment_board_member::where('board_directors_id', '=', $currentBoard->id)->orderBy("position_order", "asc")->get();
        }

        if ($prevBoard != null) {
            $subBoard = Depatrtment_board_member::where('board_directors_id', '=', $prevBoard->id)->orderBy("position_order", "asc")->get();
        }
        //get all
        $oldestList = Department_board_director::where('current', '=', 2)->get();
        //get meeting list
        $meetingLists = Depatrtment_meeting::where('department_id', '=', $id)->orderBy("created_at", "Desc")->paginate(6);
//get news list
      $newsLists=Department_news::where('department_id', '=', $id)->orderBy("created_at", "Desc")->paginate(6);
        return view('Customer.division.divisionDetails', compact('newsLists','meetingLists', 'divisionObj', 'currentBoard', 'prevBoard', 'mastrBoard', 'subBoard', 'oldestList'));
    }


    public function registerDevision(Request $request)
    {


        Depatrtment_register::create($request->all());


        return redirect()->back()->with('message', 'Thanks; your request has been submitted successfully !');
    }

    function fetch_meetingdevision(Request $request)
    {


        if ($request->ajax()) {
            $id = $request->get("id");

            $divisionObj = Depatrtment::where("id", '=', $id)->first();

            $currentBoard = Department_board_director::where('department_id', '=', $id)->where('current', '=', 0)->first();


            $prevBoard = Department_board_director::where('department_id', '=', $id)->where('current', '=', 1)->first();
            if ($currentBoard != null) {
                $mastrBoard = Depatrtment_board_member::where('board_directors_id', '=', $currentBoard->id)->orderBy("position_order", "asc")->get();
            }

            if ($prevBoard != null) {
                $subBoard = Depatrtment_board_member::where('board_directors_id', '=', $prevBoard->id)->orderBy("position_order", "asc")->get();
            }
            //get all
            $oldestList = Department_board_director::where('current', '=', 2)->get();
            //get meeting list
            $meetingLists = Depatrtment_meeting::where('department_id', '=', $id)->orderBy("created_at", "Desc")->paginate(6);
           //get news list
           $newsLists=Department_news::where('department_id', '=', $id)->orderBy("created_at", "Desc")->paginate(6);
          
           if(!empty($request->get("start"))){
           
            return view('Customer.division.newsList', compact('newsLists','meetingLists', 'divisionObj', 'currentBoard', 'prevBoard', 'mastrBoard', 'subBoard', 'oldestList'))->render();
        }

          
            return view('Customer.division.meetingList', compact('newsLists','meetingLists', 'divisionObj', 'currentBoard', 'prevBoard', 'mastrBoard', 'subBoard', 'oldestList'))->render();
        }
    }



    public function newsDivisionDetails($id){

        $newsObj=Department_news::where("id",'=',$id)->first();
        $newsGallery=Department_gallery::where("department_news_id",'=',$id)->get();
        $relatedNews=Related_department_news::where("department_news_id",'=',$id)->paginate(3);
        $newsRandom=Department_news::take(3)->inRandomOrder(rand(10,100))->get();
        return view('Customer.division.newsDetails',compact('newsObj','newsGallery','relatedNews','newsRandom'));
    }

    public function meetingDivisionDetails($id){

        $newsObj=Depatrtment_meeting::where("id",'=',$id)->first();
        $newsGallery=Depatrtment_meeting_gallery::where("department_meeting_id",'=',$id)->get();
      
        $newsRandom=Depatrtment_meeting::take(3)->inRandomOrder(rand(10,100))->get();
        return view('Customer.division.meetingDetails',compact('newsObj','newsGallery','newsRandom'));
    }


    function fetch_newsDetailsDeivsion(Request $request)
    {
     

     if($request->ajax())
     {
         $id=$request->get("id");
         $newsObj=Department_news::where("id",'=',$id)->first();
         $newsGallery=Department_gallery::where("department_news_id",'=',$id)->get();
         $relatedNews=Related_department_news::where("department_news_id",'=',$id)->paginate(3);
         $newsRandom=Department_news::take(3)->inRandomOrder(rand(10,100))->get();
               
         return view('Customer.division.newsDetailsList', compact('newsObj','newsGallery','relatedNews','newsRandom'))->render();
     }
    }
}
