
@extends('frontend.layouts.index')

@section('title')
  Users
@endsection

<style>
 .selection{
  /* background-color: lightblue;
  width: 110px; */
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
    <h3 class="page-title text-dark" textalign:center > Bitiruvchilar jadvali</h3>
    {{-- <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a  href="{{route('user.create')}}" class="badge badge-outline-success">Create New User</a></li>
      </ol>
    </nav> --}}
</div>
<div class="row " >
    <div class="col-12 grid-margin">
      <div class="card selection" style="background-color:white">
        <div class="card-body ">
          <h4 class="card-title">Users</h4>

          <div class="row">
            <div class="col-md-7">

            </div>
            <div class="col-md-2">
              <form action="" enctype="multipart/form-data">
                @csrf
                @method('GET')
               
                <input type="text" class="form-control" style="float:right" placeholder="Bitirgan yili" name="search_year">
              </form>
              
            </div>
            <div class="col-md-3">
              <form action="" enctype="multipart/form-data">
                @csrf
                @method('GET')

                <input type="search" class="form-control" style="float:right" placeholder="User INN" name="search">
               
              </form>

            </div>
        </div>


          
          <div class="table-responsive">
            <table class="table " >
              <thead>
                <tr>
                    <th>#</th>
                    <th>Foto</th>
                    <th>Group</th>
                    <th>User Name</th>
                    <th>Phone Number</th>
                    <th>Inn</th>
                    <th>Pasport Raqami</th>
                    <th>Email</th>
                    <th>Bitirgan yili</th>
                </tr>
              </thead>
              <tbody>
                @if ($users)

                @foreach($users as $key => $user)
                    @if ($user != null)
                    {{-- @dd($user) --}}
                        <tr>
                            <td>{{ ($key+1)}}</td>
                            <td>
                                <img class="img"  src="{{ url('uploads/fotos/'.$user->foto) }}">
                                {{-- {{$user->slug}} --}}
                            </td>
                            <td>
                                {{$user->group_id}}
                                <span >- group</span>

                            </td>
                            <td>{{$user->full_name}}</td>
                            <td>{{$user->phone_number}}</td>
                            <td>{{$user->inn}}</td>
                            <td>{{$user->serias_number}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->date}}</td>
                        </tr>
                    @endif
                @endforeach

                @endif

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>


@endsection

