<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    //
    public function Home() {
        $hero = DB::table('hero_sections')->first();
        $setting =DB::table('settings')->first();
        $service =  DB::table('services')->limit(6)->get();
        $skillF =  DB::table('skills')->where('status',1)->get();
        $skillB =  DB::table('skills')->where('status',2)->get();
        $about =  DB::table('abouts')->first();

        $compact = compact('setting','hero','service','skillF','skillB','about'); 
        return view('frontend.master',$compact); 
    }
    
}
