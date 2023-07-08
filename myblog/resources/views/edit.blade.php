<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>edit-blog</title>
    @vite(['resources/sass/app.scss'])
</head>

<body>
    @include('nav')
    <br><br><br>
    <div class="card mx-auto px-5 pb-4 pt-4" style="width: 70rem; background: linear-gradient(to right, #434343 0%, black 100%);">
        <form method="POST" action="{{ route('update', $post->id) }}" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <h5 class="card-titl text-light col-sm-2">Edit {{ $post->title }}</h5><br>

            <div class="form-group row">
                <label for="auth" class="col-sm-2 col-form-label text-info">Auth</label>
                <div class="col-sm-10">
                    <input type="text" name="auth" class="form-control" id="auth" value="{{$post->auth}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label text-info">Title</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" id="title" value="{{$post->title}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="description" class="col-sm-2 col-form-label text-info">Description</label>
                <div class="col-sm-10">
                    <textarea name="description" dirname class="form-control" id="description" style="height: 141px;">
                    {{$post->description}}
                    </textarea>
                </div>
            </div>

            <br>
            <div class="form-group">
                <label for="image" class="col-form-label text-light">upload your photo</label>
                <input type="file" class="form-control-file text-info" id="image" name="image">
            </div>
            <br>
            <button type="submit" class="btn btn-info">Submit</button>
        </form>
    </div>
</body>

</html>