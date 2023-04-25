
@extends('frontend.layouts.index')

@section('title')
  web-sahifa
@endsection

<style>
</style>
@section('content')







<div class=" text-black " style="text-align: center !important">
    <h2 class=" text-blue"> OTM bitiruvchilari uchun web-texnologiyalari asosida ma`lumotlar bazasini boshqarish tizimini yaratish>></h2>
</div>
<div class="page-header">
    <h3 class="page-title"> Bitiruvchilar jadvali </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a  href="{{route('user.login')}}" class="badge badge-outline-success">Tizimga kirish</a></li>
      </ol>
    </nav>
</div>
<div class="row mt-4" style="color: black !important" >
   <div class="col-md-4" style="border-right: 1px solid; overflow:auto; height:450px;">
      {{-- @dd($users) --}}
       @foreach ($users as $user)

        <div class="row ml-2 mt-2">
            <div class="col-md-5">
                <img class="box" style="width: 135px; height:180px"  src="{{ url('uploads/fotos/'.$user->foto) }}">
                {{-- <img class="box" style="width: 135px; height:180px"  src="{{ url('uploads/fotos/'.$user->foto) }}"> --}}
            </div>
            <div class="col-md-7 mt-2">
              <b>{{$user->group_id}} -Group</b><br>
              <span>{{$user->name}} </span> <br>

              <span>{{$user->full_name}}</span>

            </div>
        </div>

       @endforeach
   </div>
   <div class="col-md-8">

    <img class="box mt-5" style="width: 100%; height:400px"  src="{{ url('uploads/universitet_photo/milliy_1.jpg') }}">
       

      {{-- @dd($news) --}}
        {{-- @foreach ($news as $new)
          <div class="card m-2" style="background-color:white">
          
              <b>{{$new->theme}}</b>
            <span>{{$new->description}}</span>
          </div>
        @endforeach --}}
   </div>
</div>


@endsection

