<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function page(Request $request)
    {
        $seo = DB::table('seoproperties')->where('pageName', '=', 'Home')->first();
        return view('pages.home', ['seo' => $seo]);
    }
    function heroData(Request $request)
    {
        return DB::table('heropropertiess')->first();
    }
    function aboutData(Request $request)
    {
        return DB::table('abouts')->first();
    }
    function socialData(Request $request)
    {
        return DB::table('socials')->first();
    }
}
