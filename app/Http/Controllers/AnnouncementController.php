<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('welcome to world');
        $announcements=DB::table('announcements')->get();
        // dd($announcements);
        return view('admin.announcement.index',compact('announcements'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        

        
 // $product_ru=ProductRu::where('id',$id)->first();
 // // $product_uz=ProductUz::where('id',$id)->first();
 // $category=CategoryRu::where('id',$product_ru->category_id)->first();
//  $user=AnnouncementController::where('id',$id)->first();

 $announcement=DB::table('announcements')->where('id',$id)->first();

 //    dd($id);
 //    return 'came';
 return view('admin.announcement.show',compact('announcement'));
//  return view('admin.forms.product_show',compact('announcement'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}





// public function productShow($id)
// {


//  // $product_ru=ProductRu::where('id',$id)->first();
//  // // $product_uz=ProductUz::where('id',$id)->first();
//  // $category=CategoryRu::where('id',$product_ru->category_id)->first();
//  $user=User::where('id',$id)->first();

//  //    dd($id);
//  //    return 'came';
//  return view('admin.forms.product_show',compact('user'));
// }




// public function productEdit($id)
// {


//  // $product_ru=ProductRu::where('id',$id)->first();
//  // // dd($product_ru);
//  // // $product_uz=ProductUz::where('id',$id)->first();
//  // $category=CategoryRu::where('id',$product_ru->category_id)->first();
//  // $categories=CategoryRu::pluck('category_name_ru','id');

//  $user=User::where('id',$id)->first();

//  //    dd($id);
//  //    return 'came';
//  return view('admin.forms.product_edit',compact('user'));
// }
// public function productDestroy($id)
// {
//  //    dd($id);
//  //    User::destroy(User::findOrFail($id)->user->id);


//  $customer_ru = User::find($id);
//  $customer_ru->delete();

//  // $customer_ru->soft_delete='active';
//  // // dd($customer_ru);
//  // $customer_ru->save();
//  return redirect()->route('product.tables');

// } 