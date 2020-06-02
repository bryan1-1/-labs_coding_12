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
        <a class="nav-link active" href="/testimonial/create">create new Testimonials</a>
        <a class="nav-link" href="/testimonial">Testimonials</a>
        <a class="nav-link" href="/home">back office menu</a>
      </nav>
    <div class="flex-center position-ref">
    <form action="/testimonial/{{$testimonial->id}}" method="post" enctype='multipart/form-data'>
            @csrf   
            @method('put') 
                    <div class="container">
                <div class="row my-3">
                    <div class="col-9 mt-5 bg-secondary text-white">
                        <h3>{{$testimonial->name}}</h3>
                        <input type="text" name="name">
                        <p>{{$testimonial->lastName}}</p>
                        <input type="text" name="lastName">
                        <p>{{$testimonial->job}}</p>
                        <input type="text" name="job">
                        <h3>{{$testimonial->description}}</h3>
                        <input type="text" name="description">
                        <p>choose picture</p>
                        <input type="file" name="url">
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