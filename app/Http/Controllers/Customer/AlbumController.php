<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\News;
class AlbumController extends Controller
{
    public function index(){
      
        $albums=Album::orderBy("created_at", "Desc")->paginate(6);
        $newsRandom=News::take(3)->inRandomOrder(rand(10,100))->get();
      return view('Customer.albums.index',compact('albums','newsRandom'));
      }

      public function fetch_album(Request $request){
        if($request->ajax())
        {
            $albums=Album::orderBy("created_at", "Desc")->paginate(6);
         
         return view('Customer.albums.indexAlbum',compact('albums'))->render();
        }   
      }
}
