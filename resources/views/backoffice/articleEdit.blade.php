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
        <a class="nav-link active" href="/article/create">Post new articles</a>
        <a class="nav-link" href="/article">Articles</a>
        <a class="nav-link" href="/home">back office menu</a>
      </nav>
    <div class="flex-center position-ref">
    <form action="/article/{{$article->id}}" method="post" enctype='multipart/form-data'>
            @csrf   
            @method('put') 
                    <div class="container">
                <div class="row my-3">
                    <div class="col-9 mt-5 bg-secondary text-white">
                        <h3>{{$article->title}}</h3>
                        <input type="text" name="title">
                        <p>{{$article->date}}</p>
                        <input type="text" name="date">
                        <p>{{$article->author}}</p>
                        <input type="text" name="author">
                        <p>{{$article->job}}</p>
                        <input type="text" name="job">
                        <p>{{$article->description}}</p>
                        <input type="text" name="description">
                        <p>{{$article->text}}</p>
                        <input type="text" name="text">
                        <p>choose bg picture</p>
                        <input type="file" name="url">
                        <p>author picture</p>
                        <input type="file" name="authorUrl">
                        <div class="col my-4">
                            {{-- <div class="form-group" style="margin-top:18px;">
                                <label>Select Tags</label>
                                <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tags[]">
                                @foreach ($tag as $tag)
                                  <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endforeach
                                </select>
                              </div> --}}
                              <label>Select Tags</label>
                              <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tags[]">
                                @foreach ($tag as $tag)
                                <option value="{{ $tag->id }}"
                                  @foreach ($article->tags as $postTag)
                                    @if ($postTag->id == $tag->id)
                                      selected
                                    @endif
                                  @endforeach
                                >{{ $tag->name }}</option>
                                @endforeach
                              </select>

                            <button class="btn btn-success" type="submit">edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>