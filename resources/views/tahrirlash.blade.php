<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berilganlar bazasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
     {{-- <h2>Berilganlar bazasi </h2> --}}
     {{-- <a class="btn btn-primary" href="/bitiruvchi-otm1/create.blade.php" role="button"> ADD </a> --}}
     <a  href="{{route('students.create')}}" class="btn btn-primary">Create New User</a>
     <form class="my-2" action="">
        @csrf
        @method('GET')
        <input type="text"  placeholder=" Search" name="search">
        <button class="btn btn-primary"> Search </button>
     </form>
     <br>
     <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>FIO</th>
                <th>Email</th>
                <th>Telefon raqami</th>
                <th>Inn</th>
                <th>Birth day</th>
                <th>Yashash manzili</th>
                <th>Yaratish</th>
                <th>Amal</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach ($users as $user)
                <tr>
                    {{-- @dd($user->id) --}} 
                    <td>
                        @php
                            // $i+1;
                            echo $i++;
                        @endphp
                    </td>
                    {{-- @dd('feftdjsfed') --}}
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->inn}}</td>
                    <td>{{$user->date}}</td>

                    <td>{{$user->address}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>
                        {{-- <a class='btn btn-primary btn-sm' href='/bitiruvchi-otm1/edit.php?id=$row[id]'>Edit</a>
                        <a class='btn btn-danger btn-sm' href='/bitiruvchi-otm1/delete.php?id=$row[id]'>Delete</a> --}}
                        <a class=' m-2 btn btn-primary btn-sm'href= '{{route('user.edit', $user->id)}}'>Edit</a>
                        <a class='btn btn-danger btn-sm' href='{{route('user.delete', $user->id)}}'>Delete</a>
                        
                    </td>
                </tr>
             @endforeach
        </tbody>

     </table>    
    </div>
</body>
</html>