<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="bg-dark">
<nav class="nav justify-content-center bg-secondary">
  <a class="nav-link active" href="/user/create">Add new users</a>
  <a class="nav-link" href="/user">Users</a>
<a class="nav-link" href="/user/{{Auth::id()}}">My profile</a>
  <a class="nav-link" href="/home">back office menu</a>

</nav>
@foreach ($user as $user)
<div class="my-4 bg-secondary">
    <div class="">
<img class="mt-4" height="100px" width="100px" src="{{asset('storage/'.$user->url)}}" alt="">
<hr>
<p>{{$user->name}}</p>
<hr>
<p>{{$user->email}}</p>
<hr>
<p>{{$user->role_id}}</p>
<hr>
<div class="row my-2">
<form class="mx-auto" action="/user/{{$user->id}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
</div>
<div class="row my-2">
<form class="mx-auto" action="/user/{{$user->id}}/edit" method="get">
    @csrf
    <button type="submit" class="btn btn-success">edit</button>   
</form>
</div>
<hr>
</div>
</div>
@endforeach
</body>
</html>