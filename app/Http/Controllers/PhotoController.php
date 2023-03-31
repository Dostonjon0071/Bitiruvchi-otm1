<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PhotoController extends Controller

// class Controller extends AnotherClass implements Interface
{
  public function create()
  {
      return view('upload');

  }

  public function store(Request $request)
  {
    dd($request);
  }

    // public function create()
    // {
    //     return view('upload');

    // }

    // public function store(Request $request)
    // {
    //   dd($request);
    // }
}
?>
