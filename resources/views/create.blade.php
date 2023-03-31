<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="row">
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
        
                  <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Create User</h4>
                        <form method="POST" action="{{ route('students.create') }}" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label for="exampleInputName1"> User Name</label>
                                <input name="name"  type="text" class="form-control" id="exampleInputName1" placeholder=" Full Name" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Email</label>
                                <input name="email"  type="email" class="form-control" id="exampleInputEmail3" placeholder="email" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Phone</label>
                                <input name="phone"  type="number" class="form-control" id="exampleInputEmail3" placeholder="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">INN</label>
                                <input name="inn"  type="number" class="form-control" id="exampleInputEmail3" placeholder="INN" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Address</label>
                                <input name="address"  type="text" class="form-control" id="exampleInputEmail3" placeholder="Address" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Birth date</label>
                                <input name="date"  type="date" class="form-control" id="exampleInputEmail3" placeholder="Address" required>
                            </div>
                            <button type="submit" class=" my-2 btn btn-primary float-right mr-2">Save</button>
                            {{-- <button class="btn btn-dark">Cancel</button> --}}
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
  
    
</body>
</html>



