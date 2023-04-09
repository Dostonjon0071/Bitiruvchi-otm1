<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo_theme_home;
use App\Models\Headquarter;
use App\Models\Product;
use App\Rules\Photo_theme_homeRules;
use App\Http\Rules\CreateValidationRuquest;


class Photo_theme_home extends Controller
{
    /**
     * Display a listing of the resours.
     * 
     *  @return \Illuminate\Http\Response
     */

     public function index(Request $request)
     {
        $Photo_theme_home=Photo_theme_home :: paginate(3);

        return view('Photo_theme_home.main', [
            'Photo_theme_home'=>$Photo_theme_home
        ] );
     }
    

}
