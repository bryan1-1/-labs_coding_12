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
  <a class="nav-link" href="/question">New messages</a>
  <a class="nav-link" href="/home">back office menu</a>
</nav>
@foreach ($question as $question)
<div class="my-4 bg-secondary">
    <div class="">
<p>{{$question->name}}</p>
<hr>
<p>{{$question->email}}</p>
<hr>
<p>{{$question->subject}}</p>
<hr>
<p>{{$question->message}}</p>
<hr>
<div class="row my-2">
<form class="mx-auto" action="/question/{{$question->id}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
</div>
</div>
</div>
@endforeach
</body>
</html>