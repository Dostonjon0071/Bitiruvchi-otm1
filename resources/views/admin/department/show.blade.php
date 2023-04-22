
@extends('layouts.index')

@section('title')
  Elonlar
@endsection

<style>
 .selection{
  /* background-color: lightblue;
  width: 110px; */
  height: 500px;
  /* overflow: auto !important; */
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
      <div class="card selection">
        <div class="card-body ">
          <h4 class="card-title">Elonlar</h4>
          <div class="row">
            <div class="col-md-3">
                {{$department->created_at}}
            </div>
            <div class="col-md-9">
              <div class="card" style="border: 1px solid blue; padding:10px">
                {{$department->department}}

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
</div>


@endsection

