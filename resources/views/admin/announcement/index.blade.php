
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
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a  href="{{route('announcement.create')}}" class="badge badge-outline-success">yangi elon yaratish</a></li>
      </ol>
    </nav>
</div>
<div class="row " >
    <div class="col-12 grid-margin">
      <div class="card selection">
        <div class="card-body ">
          <h4 class="card-title">Elonlar</h4>
          <div class="table-responsive">
            <table class="table " >
              <thead>
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>elon</th>
                    <th>Options </th>
                </tr>
              </thead>
              <tbody>
                @if ($announcements)

                @foreach($announcements as $key => $announcement)
                    @if ($announcement != null)
                    {{-- @dd($announcement) --}}
                        <tr>
                            <td>{{ ($key+1)}}</td>
                            <div class="row">
                                <div class="col-md-3">
                                    <td>{{$announcement->created_at}}</td>
                                </div>
                                <div class="col-md-9">
                                    <td style="width: 500px;" >
                                        {!! \Illuminate\Support\Str::words($announcement->text, 10,'....')  !!}
                                        {{-- {{$announcement->text}} --}}
                                    </td>
                                </div>
                            </div>
                            
                            
                            
                            <td>
                                <a href="{{route('announcement.show', $announcement->id)}}" class="btn btn-soft-danger btn-icon btn-circle btn-sm"  title="show">
                                    <i  class="icon-md mdi mdi-eye text-primary "></i>
                                </a>
                                <a href="{{route('announcement.edit', $announcement->id)}}" class="btn btn-soft-danger btn-icon btn-circle btn-sm"  title="edit">
                                    <i  class="icon-md mdi mdi-table-edit  text-primary "></i>
                                </a>
                                <a href="{{route('announcement.destroy', $announcement->id)}}" class="btn btn-soft-danger btn-icon btn-circle btn-sm"  title="delete">
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

