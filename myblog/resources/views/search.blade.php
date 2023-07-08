<!DOCTYPE html>
<html>
  
  <head>
    <title>search</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @vite(['resources/sass/app.scss'])
  </head>
  
  <body>
    @include('nav')
    <br> <br>
    <div class="containerr">
      
    @foreach($blog as $blo)
    <div class="example-2 cardi">
      <div class="wrapper" style="background: url('https://tvseriescritic.files.wordpress.com/2016/10/stranger-things-bicycle-lights-children.jpg') center / cover no-repeat ">
        <div class="header">
          <div class="date">
            <span class="day">{{ Carbon\Carbon::parse($blo->created_at)->format('d-m-Y') }}</span>
            <!-- <span class="month">Aug</span>
          <span class="year">2016</span> -->
          </div>
          <ul class="menu-content">
            <li>
              <a href="#" class="fa fa-bookmark-o"></a>
            </li>
            <li><a href="#" class="fa fa-heart-o"><span>18</span></a></li>
            <li><a href="#" class="fa fa-comment-o"><span>3</span></a></li>
          </ul>
        </div>
        <div class="data">
          <div class="content">
            <span class="author">{{ $blo->auth }}</span>
            <h1 class="title"><a href="#">{{ $blo->title }}</a></h1>
            <p class="text overflow-auto" style="scrollbar-width: none;">{{ $blo->description }}</p>
            <div class="cntr">
              <a href="#" class="button">edit</a>
              <a href="#" class="button">delete</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    <div class="row d-flex justify-content-center">{{ $blog->links()}}</div>
    
    <a href="{{ route('add') }}" class="btn btn-info d-flex justify-content-center mb-4 mt-5 mr-5 ml-5">
      add
    </a>

</body>