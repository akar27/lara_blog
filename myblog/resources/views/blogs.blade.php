<!DOCTYPE html>
<html>

<head>
  <title>blogs</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  @vite(['resources/sass/app.scss'])

</head>

<body>
  @include('nav')
  <br> <br><br>

  @if(session()->has('message'))
  <div class="mx-auto w-4/5 pb-10">
    <div class="border bg-danger text-white font-bold rounded-t px-4 py-2">
      Warning
    </div>
    <div class="border rounded bg-secondary rounded-b px-4 py-3 text-white">
      {{ session()->get('message') }}
    </div>
  </div>
  @endif
  <div class="containerr">

    @foreach($blog as $blo)
    <div class="example-2 cardi">
      <div class="wrapper" style="z-index: 0; background: url('https://tvseriescritic.files.wordpress.com/2016/10/stranger-things-bicycle-lights-children.jpg') center / cover no-repeat ">
        <img src="{{asset('./upload/'.$blo->image_path)}}" alt="sdasdc" class="w-100" style="position: absolute;left: 0px;top: 0px;z-index: -1;">
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
            <li><a href="{{ route('comnt', $blo->id) }}" class="fa fa-comment-o"><span>3</span></a></li>
          </ul>
        </div>
        <div class="data">
          <div class="content">
            <span class="author">{{ $blo->auth }}</span>
            <h1 class="title"><a href="#">{{ $blo->title }}</a></h1>

            <p class="text overflow-auto" style="scrollbar-width: none;">{{ $blo->description }}</p>

            <div class="cntr">
              <a href="{{ route('edit', $blo->id) }}" class="button">
                <button type="submit" class="btn btn-outline-info">edite</button>
              </a>
              <a href="#" class="button">
                <form method="POST" action="{{ route('delete',$blo->id) }}">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="btn btn-outline-info">delete</button>
                </form>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach



    <div class="row d-print-table-row justify-content-center">{{ $blog->links()}}</div>
    <a href="{{ route('add') }}" class="btn btn-dark d-flex justify-content-center mb-4 ml-5 mr-5">
      add
    </a>

</body>