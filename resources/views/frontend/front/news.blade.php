
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

          @foreach ($data as $announcement)

            <div class="row my-3">
              {{-- <div class="col-md-3">
                <div class="card" style="border: 1px solid blue; padding:10px; background: #ffffff">
                  
                </div>
                 
              </div> --}}
              <div class="col-md-12">
                <div class="card" style="border: 1px solid blue;  background: #ffffff">
                  <div class="row ">
                    <div class="col-md-3 p-2" style="border-right: 1px solid blue;">
                      {{$announcement->group_id}} - group <br>
                      {{$announcement->full_name}}
                    </div>
                    <div class="col-md-9 p-2">
                      {{$announcement->text}}
                    </div>
                   
                  </div>
                 

                </div>

              </div>
            </div>

          @endforeach
        </div>
      </div>
    </div>


 

   
</div>


@endsection

