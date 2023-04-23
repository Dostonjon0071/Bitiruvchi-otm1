<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          
        $teacher=DB::table('teachers')->get();
        // dd($teacher);
        // dd($users);
        return view('admin.teacher.index',compact('teacher'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->method() == 'POST')
        {
           // dd($request->all());
            // $request->validate([
            //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // ]);
    
            // dd($filename);
    
            if ($request->fotos) {
                $filename = time() . '.'. $request->fotos->extension();
                $path=public_path('uploads/fotos/');
                $request->fotos->move($path, $filename);
              }
         
    
    
           $teacher=new Teacher();
   
          //    $department->user_id=auth()->id();
           $teacher->department_id=$request->code;
           $teacher->full_name=$request->full_name;
           $teacher->description=$request->description;
           $teacher->foto=$filename;
           $teacher->save();
   
   
   
           if (Auth::user()->staff=="admin") {
               return redirect()->route("teacher.for_admin");
           }
           
        //    return redirect()->route("announcement.tables_for_user");
   
        }
        $department=DB::table('departments')->get();
        // dd($department);
        // dd($users);
        return view('admin.teacher.create',compact('department'));
            // return view('admin..create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teachers=DB::table('teachers')->where('department_id',$id)->get();
        // dd($teachers);
        return view('frontend.front.teacher',compact('teachers'));
    }
    


    public function adminShow($id)
    {
        $teachers=DB::table('teachers')->get();
        // dd($teachers);
        return view('frontend.front.teacher',compact('teachers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher=DB::table('teachers')->where('id',$id)->first();

        //    dd($id);
        //    return 'came';
        return view('admin.teacher.edit',compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       //dd($request->all());

        if ($request->fotos) {
            $filename = time() . '.'. $request->fotos->extension();
            $path=public_path('uploads/fotos/');
            $request->fotos->move($path, $filename);
          }
     


       $teacher=Teacher::where('id',$request->teacher_id)->first();

      //    $department->user_id=auth()->id();
       $teacher->department_id=$request->code;
       $teacher->full_name=$request->full_name;
       $teacher->description=$request->description;
       $teacher->foto=$filename;
       $teacher->save();



       if (Auth::user()->staff=="admin") {
           return redirect()->route("teacher.for_admin");
       }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department=Teacher::findOrFail($id);
        $department->delete();


        if (Auth::user()->staff=="admin") {
            return redirect()->route("teacher.for_admin");
        }
    }
}
