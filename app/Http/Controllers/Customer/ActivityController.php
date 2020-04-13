<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Woman_activity;
use App\Models\Wactivity_gallery;
use App\Models\Related_wactivity;
class ActivityController extends Controller
{
    public function index(){

        $news=Woman_activity::orderBy("created_at", "Desc")->paginate(6);
      $newsRandom=Woman_activity::take(3)->inRandomOrder(rand(10,100))->get();
          return view('Customer.activity.index',compact('news','newsRandom'));
      }
  
      public function newsDetails($id){
  
          $newsObj=Woman_activity::where("id",'=',$id)->first();
          $newsGallery=Wactivity_gallery::where("activity_id",'=',$id)->get();
          $relatedNews=Related_wactivity::where("activity_id",'=',$id)->paginate(3);
          $newsRandom=Woman_activity::take(3)->inRandomOrder(rand(10,100))->get();
          return view('Customer.activity.newsDetails',compact('newsObj','newsGallery','relatedNews','newsRandom'));
      }
  
      function fetch_data(Request $request)
      {
       
  
       if($request->ajax())
       {
          $news=Woman_activity::orderBy("created_at", "Desc")->paginate(6);
          $newsRandom=Woman_activity::take(3)->inRandomOrder(rand(10,100))->get();
        return view('Customer.activity.indexNews', compact('news','newsRandom'))->render();
       }
      }
  
      function fetch_news(Request $request)
      {
       
  
       if($request->ajax())
       {
           $id=$request->get("id");
           $newsObj=Woman_activity::where("id",'=',$id)->first();
           $newsGallery=Wactivity_gallery::where("activity_id",'=',$id)->get();
           $relatedNews=Related_wactivity::where("activity_id",'=',$id)->paginate(3);
           $newsRandom=Woman_activity::take(3)->inRandomOrder(rand(10,100))->get();
                 
           return view('Customer.activity.newsDetailsList', compact('newsObj','newsGallery','relatedNews','newsRandom'))->render();
       }
      }
}
