<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="bg-dark">
    <nav class="nav justify-content-center bg-secondary">
        <a class="nav-link" href="/presentation">Presentations</a>
        <a class="nav-link" href="/home">back office menu</a>
      </nav>
    <div class="flex-center position-ref">
    <form action="/presentation/{{$presentation->id}}" method="post" enctype='multipart/form-data'>
            @csrf   
            @method('put') 
                    <div class="container">
                <div class="row my-3">
                    <div class="col-9 mt-5 bg-secondary text-white">
                        <h3>{{$presentation->title}}</h3>
                        <input type="text" name="title">
                        <p>{{$presentation->description}}</p>
                        <input type="text" name="description">
                        <p>{{$presentation->description2}}</p>
                        <input type="text" name="description2">
                        <p>{{$presentation->button}}</p>
                        <input type="text" name="button">
                    
                    </div>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>