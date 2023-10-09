<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function page(Request $request){
        return view(view:'pages.home');
    }

    function heroData(){
        return DB::table(table:'heropropertices')->first();
    }

    function aboutData(Request $request){
        return DB::table(table:'abouts')->first();
    }
    function socialData(Request $request){
        return DB::table(table:'socials')->first();
    }
}
