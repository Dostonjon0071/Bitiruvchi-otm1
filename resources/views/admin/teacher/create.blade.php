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
            <h4 class="card-title"> Edit Product</h4>

            <form method="POST"  action="{{ route('teacher.create') }}" enctype="multipart/form-data">
                @csrf
                @method('POST')
                {{-- <input type="hidden" name="product_id" value="{{ $user->id }}"> --}}
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{-- @dd($user) --}}
                            <label for="exampleInputName1"> User Name  </label>
                            <input name="full_name"   type="text" class="form-control" id="exampleInputName1" placeholder=" Full Name" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label for="exampleInputEmail3">Description</label>
                          <input name="description"   type="text" class="form-control" id="exampleInputEmail3" placeholder="description" required>
                      </div>
                    </div>
                  </div>
                  
        
                   
                
                  <div class="row mt-2">
                    <div class="col-md-7 ">
                      <label for=""> kafederani tanlash</label>
                      <select class="form-control"  name="code" style="width:100%">
                        @foreach($department as $value)
                            <option   name="department_id"  value="{{$value->id }}"  >
                              {{$value->department}}
                            </option>
                          @endforeach
                      </select>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="exampleInputPassword4" class="m-2"> New Photo</label>
                            {{-- <input type="" name=""  style="display:none"> --}}
                            <input name="fotos"  type="file" enctype="multipart/form-data" required>
                       </div>
                    </div>
                  </div>


                <button type="submit" class="btn btn-primary float-right mr-2">Save</button>
                {{-- <button class="btn btn-dark">Cancel</button> --}}
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection


