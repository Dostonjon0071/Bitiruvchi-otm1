@extends('frontend.layouts.index')

@section('title')
  Elonlar
@endsection

<style>
 .selection{
  height: 500px;
  overflow: auto !important;
 }
.img{
    width: 100px !important;
    height: 100px !important;
}
</style>
@section('content')
<div class="page-header">
    <h3 class="page-title">Bitiruvchilar jadvali</h3>
    
</div>
<div class="row " >

  
      

    <div class="col-12 grid-margin">
      <div class="card selection text-dark"  style="background: #ffffff; ">
        <div class="card-body">
          <h4 class="card-title">Elonlar</h4>

          
          <div class="row my-3">
              @foreach ($department as $department)

                <div class="col-md-4">
                
                  <a href="{{route('department.show',$department->id)}}">
                    <div class="card" style="border: 1px solid blue;  background: #ffffff; height:100px; padding:40px;">
                  
                         {{$department->department}}

                    </div>
                  </a>
                  

                </div>
              @endforeach
            </div>

        </div>
      </div>
    </div>


 

   
</div>


@endsection

