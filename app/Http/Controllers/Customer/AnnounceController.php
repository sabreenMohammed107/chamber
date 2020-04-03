<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\Announce_gallery;
use App\Models\Related_announce;
class AnnounceController extends Controller
{
    public function index(){

        $announces=Announcement::orderBy("created_at", "Desc")->paginate(6);
      $announceRandom=Announcement::take(3)->inRandomOrder(rand(10,100))->get();
       return view('Customer.announce.index',compact('announces','announceRandom'));
      }
  
      public function announceDetails($id){
       
          $announceObj=Announcement::where("id",'=',$id)->first();
          $announceGallery=Announce_gallery::where("announce_id",'=',$id)->get();
          $relatedAnnounces=Related_announce::where("announce_id",'=',$id)->paginate(3);
          $AnnounceRandom=Announcement::take(3)->inRandomOrder(rand(10,100))->get();
          
        return view('Customer.announce.announceDetails',compact('announceObj','announceGallery','relatedAnnounces','AnnounceRandom'));
      }
  
      function fetch_announce(Request $request)
      {
       
  
       if($request->ajax())
       {
          $announces=Announcement::orderBy("created_at", "Desc")->paginate(6);
          $announceRandom=Announcement::take(3)->inRandomOrder(rand(10,100))->get();
        return view('Customer.announce.indexAnnounce', compact('announces','announceRandom'))->render();
       }
      }
  
      function fetch_announceDetails(Request $request)
      {
       
  
       if($request->ajax())
       {
           $id=$request->get("id");
           $announceObj=Announcement::where("id",'=',$id)->first();
           $announceGallery=Announce_gallery::where("announce_id",'=',$id)->get();
           $relatedAnnounces=Related_announce::where("announce_id",'=',$id)->paginate(3);
           $AnnounceRandom=Announcement::take(3)->inRandomOrder(rand(10,100))->get();
                 
           return view('Customer.announce.announceDetailsList', compact('announceObj','announceGallery','relatedAnnounces','AnnounceRandom'))->render();
       }
      }
}
