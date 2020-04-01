<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\News_gallery;
use App\Models\Related_new;
class NewsController extends Controller
{

    public function index(){

      $news=News::orderBy("created_at", "Desc")->paginate(6);
    $newsRandom=News::take(3)->inRandomOrder(rand(10,100))->get();
        return view('Customer.news.index',compact('news','newsRandom'));
    }

    public function newsDetails($id){

        $newsObj=News::where("id",'=',$id)->first();
        $newsGallery=News_gallery::where("news_id",'=',$id)->get();
        $relatedNews=Related_new::where("news_id",'=',$id)->paginate(3);
        $newsRandom=News::take(3)->inRandomOrder(rand(10,100))->get();
        return view('Customer.news.newsDetails',compact('newsObj','newsGallery','relatedNews','newsRandom'));
    }
}
