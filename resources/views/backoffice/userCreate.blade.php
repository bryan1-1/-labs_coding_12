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
        <a class="nav-link" href="/user">users</a>
        <a class="nav-link" href="/home">back office menu</a>
      
    </nav>
<div>
    <form action="/user" method="post" enctype="multipart/form-data">
        @csrf
       
        <label for="inputFile">upload</label>
         <input type="file" name="url" id="inputFile"> 
        <input  value="name" type="text" name="name" id="">
        <input  value="email" type="email" name="email" id="">
        <input  value="password" type="text" name="password" id="">
        <div class="form-group">
            <label for="icon_id"></label>
            <select class="form-control" name="role_id" id="icon_id">
                @foreach ($role as $role)
            <option value="{{$role->id}}">{{$role->name}} </option>
                @endforeach
            </select>
          </div>
        <button type="submit">submit</button>
    </form>
</div>
</body>
</html>