<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PagesController;
// use App\Http\Controllers\PostsController;

class PostsController extends Controller
{
   public function index()
   {
     return view('posts/index');
   } 


   public function students(Request $request){
     $search=$request->search;
     $users=User::get();
     if ($request->has('search') && $request->search != null) {
      $users=User::where('inn', 'LIKE', "%{$request->search}%")->get();
  }

     return view('tahrirlash',compact('users'));

    //  dd($users);
   }
   public function create(Request $request)
   {


    if ($request->method() == 'POST')
    {

      // dd($request->all());
       $product=User::create([
          'name'=>$request->name,
          'email'=>$request->email,
          'phone'=>$request->phone,
          'address'=>$request->address,
          'inn'=>$request->inn,
          'date'=>$request->date,
          // 'slug'=>$filename,
       ]);
      //  dd($product);
    return redirect()->route("students.list");
    }
        return view('create');

   }

   public function edit($id){
    // return 'came';
     $user=User::find($id);
    //  dd($user);
     return view('edit',compact('user'));

    //  dd($users);

   }
   public function update(Request $request){
    // return 'came';
     $user=User::find($request->user_id);
    //  dd($user);
    $user->name=$request->name;
    $user->email=$request->email;
    $user->phone=$request->phone;
    $user->inn=$request->inn;
    $user->address=$request->address;
    $user->date=$request->name;
    $user->save();
    return redirect()->route("students.list");

    //  dd($users);

   }

   public function delete($id){
    // return 'came';
     $user=User::find($id);
     $user->delete();
    // dd($user);
    return redirect()->route('students.list');
    //  return view('tahrirlash',compact('users'));

    //  dd($users);

   }

}
