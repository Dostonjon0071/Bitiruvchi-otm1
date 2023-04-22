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
    height: 120px !important;
    margin-left: 100px;
    margin-top: 20px;
    margin-bottom: 10px;
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

          
          <div class="row my-3 text-center">
              @foreach ($teachers as $teacher)

                <div class="col-md-4 ">
                
                    <div class="card " style="border: 1px solid blue;  background: #ffffff; ">
                      <img class="img"   src="{{ url('uploads/fotos/'.$teacher->foto) }}">
                         {{$teacher->full_name}} <br>
                         {{$teacher->description}}

                    </div>
                  

                </div>
              @endforeach
            </div>

        </div>
      </div>
    </div>


 

   
</div>


@endsection

