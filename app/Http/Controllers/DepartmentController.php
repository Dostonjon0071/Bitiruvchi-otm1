<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $department=DB::table('departments')->get();
        // dd($department);
        // dd($users);
        return view('frontend.front.department',compact('department'));
    }

    public function adminIndex()
    {
        
        $department=DB::table('departments')->get();
        // dd($department);
        // dd($users);
        return view('admin.department.index',compact('department'));
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
    
            
    
    
           $department=new Department();
   
        //    $department->user_id=auth()->id();
           $department->department=$request->text;
   
           $department->save();
   
   
   
           if (Auth::user()->staff=="admin") {
               return redirect()->route("department.tables_for_admin");
           }
           
        //    return redirect()->route("announcement.tables_for_user");
   
        }
            return view('admin.department.create');
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
        $department=DB::table('departments')->where('id',$id)->first();

        //    dd($id);
        //    return 'came';
        return view('admin.department.show',compact('department'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department=DB::table('departments')->where('id',$id)->first();

        //    dd($id);
        //    return 'came';
        return view('admin.department.edit',compact('department'));
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

        $department=Department::where('id',$request->department_id)->first();
        
        $department->department=$request->description;
        // dd($request->all());
        $department->save();
        if (Auth::user()->staff=="admin") {
            return redirect()->route("department.tables_for_admin");
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
        $department=Department::findOrFail($id);
        $department->delete();


        if (Auth::user()->staff=="admin") {
            return redirect()->route("department.tables_for_admin");
        }
    }
}
