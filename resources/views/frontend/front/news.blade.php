
@extends('frontend.layouts.index')

@section('title')
  dashboard
@endsection

<style>
</style>
@section('content')
<div class="page-header text-black">
    <h2 class=" text-blue ml-5 "> OTM bitiruvchilari uchun web-texnologiyalari asosida ma`lumotlar bazasini boshqarish tizimini yaratish  </h2>
</div>
<div class="page-header">
    <h3 class="page-title"> Bitiruvchilar jadvali</h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a  href="{{route('news.create')}}" class="badge badge-outline-success">Create News</a></li>
      </ol>
    </nav>
</div>
<div class="row" style="color: black !important" >
   <div class="col-md-12" style="border-right: 1px solid">
    {{-- @dd($news) --}}
       @foreach ($news as $new)
          <div class="row">
                {{-- <div class="col-md-5">
                    <img class="box" style="width: 150px; height:200px"  src="{{ url('uploads/fotos/'.$new->foto) }}">
                </div> --}}
                <div class="col-md-11">
                    <div class="card m-2" style="background-color:white">
                        <b>{{$new->theme}}</b>
                      <span>{{$new->description}}</span>
                    </div>
                </div>
                <div class="clo-md-1">
                  <a href="{{route('new.destroy', $new->id)}}" class="btn btn-soft-danger btn-icon btn-circle btn-sm my-3" style="display: inline-block"  title="delete">
                    <i  class="icon-md mdi mdi-delete text-danger "></i>
                  </a>
                </div>
                
                
          </div>
          
       @endforeach
   </div>

</div>


@endsection

