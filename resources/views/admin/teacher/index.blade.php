
@extends('layouts.index')

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
    <h3 class="page-title">Bitiruvchilar jadvali</h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a  href="{{route('user.create')}}" class="badge badge-outline-success">Create New User</a></li>
      </ol>
    </nav>
</div>
<div class="row " >
    <div class="col-12 grid-margin">
      <div class="card selection">
        <div class="card-body ">
          <h4 class="card-title">Users</h4>
          <div class="table-responsive">
            <table class="table " >
              <thead>
                <tr>
                    <th>#</th>
                    <th>Foto</th>
                    <th>User Name</th>
                    <th>Description</th>
                    <th>Fakultitet</th>
                    <th>Date</th>
                    <th>Options </th>
                </tr>
              </thead>
              <tbody>
                @if ($teacher)

                @foreach($teacher as $key => $user)
                    @if ($user != null)
                    {{-- @dd($user) --}}
                        <tr>
                            <td>{{ ($key+1)}}</td>
                            <td>
                                <img class="img"  src="{{ url('uploads/fotos/'.$user->foto) }}">
                                {{-- {{$user->slug}} --}}
                            </td>
                            <td>{{$user->full_name}}</td>
                            <td>{{$user->description}}</td>
                            <td>
                              @php
                                 echo  $department=\App\Models\Department::where('id',$user->department_id)->first();
                                  // dd();
                                  //  echo $department['department'];
                              @endphp
                              {{-- {{$department}} --}}
                            </td>
                            <td>{{$user->created_at}}</td>
                            <td>
                                <a href="{{route('teacher.show', $user->id)}}" class="btn btn-soft-danger btn-icon btn-circle btn-sm"  title="show">
                                    <i  class="icon-md mdi mdi-eye text-primary "></i>
                                </a>
                                <a href="{{route('teacher.edit', $user->id)}}" class="btn btn-soft-danger btn-icon btn-circle btn-sm"  title="edit">
                                    <i  class="icon-md mdi mdi-table-edit  text-primary "></i>
                                </a>
                                <a href="{{route('teacher.destroy', $user->id)}}" class="btn btn-soft-danger btn-icon btn-circle btn-sm"  title="delete">
                                    <i  class="icon-md mdi mdi-delete text-danger "></i>
                                </a>
                            </td>
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

