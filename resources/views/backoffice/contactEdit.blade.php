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
        <a class="nav-link" href="/contact">contact info</a>
        <a class="nav-link" href="/home">back office menu</a>
      </nav>
    <div class="flex-center position-ref">
    <form action="/contact/{{$contact->id}}" method="post" enctype='multipart/form-data'>
            @csrf   
            @method('put') 
                    <div class="container">
                <div class="row my-3">
                    <div class="col-9 mt-5 bg-secondary text-white">
                        <h3>{{$contact->title}}</h3>
                        <input type="text" name="title">
                        <p>{{$contact->subtitle}}</p>
                        <input type="text" name="subtitle">
                        <p>{{$contact->description}}</p>
                        <input type="text" name="description">
                        <h3>{{$contact->country}}</h3>
                        <input type="text" name="country">
                        <h3>{{$contact->street}}</h3>
                        <input type="text" name="street">
                        <h3>{{$contact->number}}</h3>
                        <input type="text" name="number">
                        <h3>{{$contact->email}}</h3>
                        <input type="text" name="email">
                        <h3>{{$contact->button}}</h3>
                        <input type="text" name="button">
                        <div class="col my-4">
                            <button class="btn btn-success" type="submit">edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>