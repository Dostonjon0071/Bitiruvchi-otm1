<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;;
use App\Models\main.blade.php;
use App\Models\Headquarter;
use App\Models\Product;
use App\Rules\ThemeRules;
use App\Http\Requests\CreateValidationRequest;


class Photo_theme_home extends Controller
{
    /**
     * Display a listing of the resours.
     *
     * @param \Illuminate\Http\Request $request 
     * @return \Illuminate\Http\Response
     */

     public function index(Request $request)
     {
        $Photo_theme_home=Photo_theme_home :: paginate(3);

        return view('Photo_theme_home.main', [
            'Photo_theme_home'=>$Photo_theme_home
        ] );
     }

    public function store(Request $request)

    {
        dd($request->all) ([

            'name'=>'required',
            'founded'=>'requred|integer|min:0|max:2023',
            'description'=>'required',
            'image'=>'requerd|mimes:jpg,png,|max:5048'     

        ]);

        $car=Car::create([

            'name'=>$request->input('name'),
            'founde&d'=>$request->input('founded'),
            'description'=>$request->input('description')

        ]);

    }
    return redirect('/front')

}
