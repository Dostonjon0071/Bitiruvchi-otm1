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
            <h4 class="card-title"> Elon yaratish</h4>

            <form method="POST"  action="{{ route('department.create') }}" enctype="multipart/form-data">
                @csrf
                @method('POST')

                   <div class="row">
                    <div class="col-md-3">
                        
                    </div>
                    <div class="col-md-9">
                        <div class="form-group" >
                            {{-- @dd($user) --}}
                            <textarea id="description_uz" style="background-color:#2A3038; color:white; height: 100px;"  name="text" class="form-control" style="height: 80px">
                               
                              </textarea>
                        </div>
                    </div>
                  </div>
                <button type="submit" class="btn btn-primary float-right mt-5">Save</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection


