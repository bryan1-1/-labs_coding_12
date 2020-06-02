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
  <a class="nav-link active" href="/link/create">create new Links</a>
  <a class="nav-link" href="/link">Links</a>
  <a class="nav-link" href="/home">back office menu</a>
</nav>
@foreach ($link as $link)
<div class="my-4 bg-secondary">
    <div class="">
<p>{{$link->name}}</p>
<hr>
<p>{{$link->link}}</p>
<hr>
<div class="row my-2">
<form class="mx-auto" action="/link/{{$link->id}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
</div>
<div class="row my-2">
<form class="mx-auto" action="/link/{{$link->id}}/edit" method="get">
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
