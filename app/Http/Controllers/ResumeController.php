<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class ResumeController extends Controller
{
    
    function page(Request $request){
        return view(view:'pages.resume');
    }
    function resumeLink(Request $request){
        return DB::table(table:'resumes')->first();
    }
    function experiancesData(Request $request){
        return DB::table(table:'experiances')->get();
    }
    function educationData(Request $request){

        return DB::table(table:'educations')->get();
    }
    function skillData(Request $request){
        return DB::table(table:'skills')->get();
    }
    function languageData(Request $request){
       return DB::table(table:'languages')->get();
    }
}
