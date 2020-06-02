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
        <a class="nav-link active" href="/service/create">create new Services</a>
        <a class="nav-link" href="/service">Services</a>
        <a class="nav-link" href="/home">back office menu</a>
      </nav>
    <div class="flex-center position-ref">
    <form action="/service/{{$service->id}}" method="post" enctype='multipart/form-data'>
            @csrf   
            @method('put') 
                    <div class="container">
                <div class="row my-3">
                    <div class="col-9 mt-5 bg-secondary text-white">
                        <h3>{{$service->title}}</h3>
                        <input type="text" name="title">
                        <p>{{$service->description}}</p>
                        <input type="text" name="description">
                        <div class="form-group">
                            {{-- <label for="icon_id"></label>
                            <select class="form-control" name="icon_id" id="icon_id">
                                @foreach ($icon as $role)
                            <option value="{{$role->id}}">{{$role->name}} </option>
                                @endforeach
                            </select>
                          </div> --}}
                            <button class="btn btn-success" type="submit">edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>