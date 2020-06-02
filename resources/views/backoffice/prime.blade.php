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
  <a class="nav-link" href="/prime">Prime services</a>
  <a class="nav-link" href="/home">back office menu</a>
</nav>
@foreach ($prime as $prime)
<div class="my-4 bg-secondary">
    <div class="">
<p>{{$prime->title}}</p>
<hr>
<p>{{$prime->button}}</p>
<hr>
<div class="row my-2">
<form class="mx-auto" action="/prime/{{$prime->id}}/edit" method="get">
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
