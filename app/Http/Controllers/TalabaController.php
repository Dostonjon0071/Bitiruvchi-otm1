<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Category;

class TalabaController extends Controller
{
    public function index()
    {
            $Talabalar = Talaba::with('category')->get();
            return view('Bitiruvchilar', compact('talabalar'));
    }

    public function created()
    {
        $categories = Category::all();
        return view('talabalar.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $input = $request->all();

        Talaba::create($input);
        return redirect('/');
    }

    public function edit ($talaba)
    {
        $categories = Category::all();
        $talaba = Talaba::find($product); 
        return view('tabalar.edit','categories');
    }
    

}