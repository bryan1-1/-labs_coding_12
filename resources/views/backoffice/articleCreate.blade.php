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
<div>
    <form action="/article" method="post" enctype="multipart/form-data">
        @csrf
       
        <label for="inputFile">upload bg picture</label>
        <input type="file" name="url" id="inputFile">
        <label for="inputFile">upload Author picture</label>
        <input type="file" name="authorUrl" id="inputFile">
        <input  value="title" type="text" name="title" id="">
        <input  value="date" type="text" name="date" id="">
        <input  value="author" type="text" name="author" id="">
        <input  value="job" type="text" name="job" id="">
        <input  value="text" type="text" name="text" id="">
        <input  value="description" type="text" name="description" id="">
        <div class="form-group" style="margin-top:18px;">
            <label>Select Tags</label>
            <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tag[]">
            @foreach ($tag as $tag)
              <option value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach
            </select>
          </div>
        <button type="submit">submit</button>
    </form>
</div>
</body>
</html>