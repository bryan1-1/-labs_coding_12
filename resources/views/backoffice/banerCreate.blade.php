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
      <a class="nav-link active" href="/baner/create">create new Baners</a>
      <a class="nav-link" href="/home">back office menu</a>
      
    </nav>
<div>
    <form action="/baner" method="post" enctype="multipart/form-data">
        @csrf
       
        <label for="inputFile">upload</label>
        <input type="file" name="url" id="inputFile">
        <input  value="slogan" type="text" name="slogan" id="">
        <button type="submit">submit</button>
    </form>
</div>
</body>
</html>