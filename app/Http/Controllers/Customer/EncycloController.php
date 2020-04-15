<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brother_agreement;
use App\Models\Commerical_agreement;
use App\Models\Region;
use App\Models\Countries_data;

class EncycloController extends Controller
{

    public function index()
    {
        $view_page = 'Customer.encyclo.';
        return view($view_page . 'index');
    }

    public function brother()
    {
        $view_page = 'Customer.encyclo.';

        $agreements = Brother_agreement::all();

        return view($view_page . 'brother', compact('agreements'));
    }


    public function commerical()
    {
        $view_page = 'Customer.encyclo.';

        $agreements = Commerical_agreement::all();

        return view($view_page . 'commerical', compact('agreements'));
    }


    public function region()
    {
        $view_page = 'Customer.encyclo.';

        $regions = Region::all();
        $agreements = Countries_data::all();
        return view($view_page . 'region', compact('regions','agreements'));
    }

    public function regionDetails(Request $request){
        $view_page = 'Customer.encyclo.';
        if($request->ajax())
     {
         $regionId=$request->get("region_id");
        $regions = Region::all();
        $agreements = Countries_data::where('region_id','=',$regionId)->get();
       if($regionId==null){
        $agreements = Countries_data::all();
       }
        return view($view_page . 'regionDetails', compact('regions','agreements'))->render();
     }
    
    }
}
