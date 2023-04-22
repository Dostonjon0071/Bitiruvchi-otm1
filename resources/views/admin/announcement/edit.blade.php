@extends('layouts.index')


@section('title')
   Edit Product
@endsection
<style>
    .box{
       box-sizing: border-box !important;
       width:300px;
       height:200px;
    }
</style>

@section('content')

<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Form elements </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Forms</a></li>
          <li class="breadcrumb-item active" aria-current="page">Form elements</li>
        </ol>
      </nav>
    </div>
    <div class="row">



      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title"> Elonni o'zgartirish</h4>

            <form method="POST"  action="{{ route('announcement.update') }}" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <input type="hidden" name="announcement_id" value="{{ $announcement->id }}">

                   <div class="row">
                    <div class="col-md-3">
                        <div class="form-group" >
                            <label for="exampleInputEmail3"></label>
                            <input style="background-color:#2A3038; color:white;" name="date" value="{{$announcement->created_at?? "not fount address"}}"  type="text" class="form-control" id="exampleInputEmail3" placeholder="address" >
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group" >
                            {{-- @dd($user) --}}
                            <textarea id="description_uz" style="background-color:#2A3038; color:white; height: 100px;"  name="description" class="form-control" style="height: 80px">
                                {{$announcement->text?? "not discription"}}
                              </textarea>
                        </div>
                    </div>
                  </div>
                <button type="submit" class="btn btn-primary float-right mt-5">Save</button>
                {{-- <button class="btn btn-dark">Cancel</button> --}}
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection


