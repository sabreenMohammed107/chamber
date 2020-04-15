<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Chamber_article;
use App\Models\Article_gallery;
use App\Models\Academy_in_number;
use App\Models\Academy_gallery;
use App\Models\Academy_sponsor;
use App\Models\Academy_partener;
use App\Models\Academy_data;

class AcademyController extends Controller
{
    public function index($id)
    {
        $view_page = 'Customer.academy.';
        //git first academy text & gallery
        $data = Chamber_article::findOrFail($id);
        $galleries = Article_gallery::where('article_id', '=', $id)->where('active', '=', 1)->orderBy("created_at", "Desc")->get();
        $chamberNumbers = Academy_in_number::all();
        $acdemyGalleries = Academy_gallery::where('active', '=', 1)->get();
        $sponsors = Academy_sponsor::where('active', '=', 1)->get();
        $parteners = Academy_partener::where('active', '=', 1)->get();


        $contactAcademy = Academy_data::first();
        if (!$contactAcademy) {
            $contactAcademy = new Academy_data();
        }
        return view($view_page . 'index', compact('data', 'galleries', 'chamberNumbers', 'acdemyGalleries', 'sponsors', 'parteners', 'contactAcademy'));
    }


    public function training($id)
    {
        $view_page = 'Customer.academy.';
        //git first academy text & gallery
        $data = Chamber_article::findOrFail($id);
        $galleries = Article_gallery::where('article_id', '=', $id)->where('active', '=', 1)->orderBy("created_at", "Desc")->get();
        $sponsors = Academy_sponsor::where('active', '=', 1)->get();
        $parteners = Academy_partener::where('active', '=', 1)->get();
        $contactAcademy = Academy_data::first();
        if (!$contactAcademy) {
            $contactAcademy = new Academy_data();
        }
        return view($view_page . 'training', compact('data', 'galleries', 'sponsors', 'parteners', 'contactAcademy'));
    }


    public function course()
    {

        $view_page = 'Customer.academy.';

        $sponsors = Academy_sponsor::where('active', '=', 1)->get();
        $parteners = Academy_partener::where('active', '=', 1)->get();
        $contactAcademy = Academy_data::first();
        if (!$contactAcademy) {
            $contactAcademy = new Academy_data();
        }
        return view($view_page . 'course', compact('sponsors', 'parteners', 'contactAcademy'));
    }
}
