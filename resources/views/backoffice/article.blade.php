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
  <a class="nav-link active" href="/article/create">Post new articles</a>
  <a class="nav-link" href="/article">Articles</a>
  <a class="nav-link" href="/home">back office menu</a>
</nav>
@foreach ($article as $article)
<div class="my-4 bg-secondary">
    <div class="">
<img class="mt-4" height="100px" width="100px" src="{{asset('storage/'.$article->url)}}" alt="">
<hr>
<p>{{$article->title}}</p>
<hr>
<p>{{$article->date}}</p>
<hr>
<p>{{$article->author}}</p>
<hr>
@foreach ($article->tags as $tag)
    <p >{{ $tag->pivot->name }}{{$tag->name}} </p>
@endforeach
<div class="row my-2">
<form class="mx-auto" action="/article/{{$article->id}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
</div>
<div class="row my-2">
<form class="mx-auto" action="/article/{{$article->id}}/edit" method="get">
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
