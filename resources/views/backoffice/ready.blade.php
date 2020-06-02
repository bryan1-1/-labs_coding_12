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
  <a class="nav-link" href="/ready">Ready???</a>
  <a class="nav-link" href="/home">back office menu</a>
</nav>
@foreach ($ready as $ready)
<p>{{$ready->title}}</p>
<hr>
<p>{{$ready->subtitle}}</p>
<hr>
<p>{{$ready->button}}</p>
<hr>
<div class="row my-2">
<form class="mx-auto" action="/ready/{{$ready->id}}/edit" method="get">
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
