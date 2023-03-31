<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Tahrirlash</title>
</head>
<body>
    
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
    
            {{-- <input class="form-control" type="number" value="{{$information[$key]['value']?? "kemadi"}}" name="{{($element->label)}}" required> --}}
            {{-- <option @if($information[$key]['value']=="OАО") selected @endif value="OАО">OАО</option> --}}
    
    
          <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Update user</h4>
                <p class="card-description"> Basic form elements </p>
                <form method="POST" action="{{ route('user.update') }}">
                    @csrf
                    @method('POST')
    
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <div class="form-group">
                        {{-- @dd($user) --}}
                        <label for="exampleInputName1">Name</label>
                        <input name="name" value="{{$user->name?? "not nime"}}" type="text" class="form-control" id="exampleInputName1" placeholder=" Full Name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input name="email" value="{{$user->email?? "not nime"}}" type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Phone number</label>
                        <input name="phone" value="{{$user->phone?? "not nime"}}" type="number" class="form-control" id="exampleInputPassword4" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">INN</label>
                      <input name="inn" value="{{$user->inn?? "not nime"}}" type="number" name="start" class="form-control"  >
                  </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Date</label>
                        <input name="date"  value="{{$user->date?? "not nime"}}" type="date" class="form-control" placeholder="YYYY-dd-mm" name="date"  required>
                    </div>
                  
                    <div class="form-group">
                        <label for="exampleInputPassword4">Address</label>
                        <input name="address" value="{{$user->address?? "not nime"}}" type="text" name="start" class="form-control"  >
                    </div>
                    <button type="submit" class="my-2 btn btn-primary float-right mr-2">Save</button>
                    {{-- <button class="btn btn-dark">Cancel</button> --}}
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>


</body>
</html>


