<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-dark bg-dark justify-content-between fixed-top pt-2 pb-2" id="navbar">
    <a class="navbar-brand text-light btn btn-outline-light" href="{{ route('blog') }}">{{ Auth::user()->name }} Blogs</a>
    <form class="form-inline" type="get" action="{{ route('sear') }}">
    @csrf
      <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
    </form>
 
<div>
    <a class="btn btn-outline-info" href="{{route('profile.edit')}}">
      {{ __('Profile') }}</a>

    <form class="form-inline btn btn-outline-info" method="POST" action="{{ route('logout') }}">
      @csrf
      <a class="text-info" href="{{route('logout')}}" onclick="event.preventDefault();
                                        this.closest('form').submit();">
        {{ __('Log Out') }}</a>
    </form>
</div>



  </nav>


  <script type="text/javascript" src="{{ url('js/script.js') }}"></script>
</body>

</html>