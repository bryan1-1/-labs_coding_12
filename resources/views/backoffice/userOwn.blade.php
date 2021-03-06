<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="bg-dark">
    <nav class="nav justify-content-center bg-secondary">
        <a class="nav-link active" href="/user/create">create new user Member</a>
        <a class="nav-link" href="/user">user</a>
        <a class="nav-link" href="/home">back office menu</a>
      </nav>
    <div class="flex-center position-ref">
    <form action="/user/{{Auth::user()->id}}" method="post" enctype='multipart/form-data'>
            @csrf   
            @method('put') 
                    <div class="container">
                <div class="row my-3">
                    <div class="col-9 mt-5 bg-secondary text-white">
                        <h3>{{Auth::user()->name}}</h3>
                        <input type="text" name="name">
                        <p>{{Auth::user()->email}}</p>
                        <input type="email" name="email">
                        <p>{{Auth::user()->password}}</p>
                        <input type="text" name="password">
                    <input type="hidden" value="{{Auth::user()->role_id}}" name="role_id">
                         <p>choose picture</p>
                        <input type="file" name="url">
                        <div class="col my-4">
                            <button class="btn btn-success" type="submit">edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>