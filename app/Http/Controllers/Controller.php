<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
 
use View;
use App\Models\Chamber_data;
use App\Models\Social;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct() {
       
         $branch =Chamber_data::first();
          $social =Social::first();
        if($social==null){
            $social = new Social();
        }
        if($branch==null){
            $branch = new Chamber_data();
        }
        View::share(['social' => $social, 'branch' => $branch]);
       
    }
}
