<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
<div>
    <div>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('post.index')}}">Post</a></li>
                            <a class="nav-link active" aria-current="page" href="{{route('admin.post.index')}}">Admin</a></li>
                           <li><a class="nav-link active" aria-current="page" href="{{ route('car.index') }}">Cars</a></li>
                           <li><a class="nav-link active" aria-current="page" href="{{ route('book.index') }}">Books</a></li>
                           <li><a class="nav-link active" aria-current="page" href="{{ route('game.index') }}">Games</a></li>
                           <li><a class="nav-link active" aria-current="page" href="{{ route('movie.index') }}">Movies</a></li>
                           <li><a class="nav-link active" aria-current="page" href="{{ route('music.index') }}">Music</a></li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
    @yield('content')
</div>
</body>
</html>
