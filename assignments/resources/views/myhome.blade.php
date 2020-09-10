<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ $title }}</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/"> -->

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/css/app.css" />

    <!-- Custom styles for this template -->

    </style>
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner">
                <h1 class="masthead-brand">{{ $title }}</h1>
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link active" href="/">Home</a>
                    <a class="nav-link" href="/about">About</a>
                    <a class="nav-link" href="/contact">Contact</a>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        @if(Auth::user()->is_admin)
                        <li class="nav-item">
                            <a class="nav-link" href="/admin">Admin Dashboard</a>
                        </li>
                        @endif
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            </div>
                        </li>
                    @endguest
                </nav>
            </div>
        </header>

      <main role="main" class="inner cover">
        <h3 class="cover-heading">For the dog lover in you.</h3>
        <img src="/images/cute_dogs_header.jpg" alt="cute_dogs_header">
        <p class="lead">Visit our site to see a listing of dogs and their characteristics</p>
        <p class="lead">
          <a href="dogs/" class="btn btn-lg btn-secondary">See dogs</a>
        </p>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <nav class="nav nav-mastfoot justify-content-center">
            <a class="nav-link active" href="/">Home</a>
            <a class="nav-link" href="/about">About</a>
            <a class="nav-link" href="/contact">Contact</a>
          </nav>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="/js/app.js"></script>
<!--     <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script> -->
  </body>
</html>
