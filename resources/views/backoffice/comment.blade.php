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
  <a class="nav-link" href="/reaction">Check all the comments</a>
  <a class="nav-link" href="/home">back office menu</a>
</nav>
@foreach ($reaction as $reaction)
<div class="my-4 bg-secondary">
    <div class="">
{{-- <img class="mt-4" height="100px" width="100px" src="{{asset('storage/'.$reaction->url)}}" alt="">
<hr> --}}
<p>{{$reaction->name}}</p>
<hr>
<p>{{$reaction->email}}</p>
<hr>
<p>{{$reaction->subject}}</p>
<hr>
<p>{{$reaction->message}}</p>
<hr>
<div class="row my-2">
<form class="mx-auto" action="/reaction/{{$reaction->id}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
</div>
</div>
@endforeach
</body>
</html>
