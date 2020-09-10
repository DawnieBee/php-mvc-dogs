<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

	<title>{{ $title ?? 'Admin' }}</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
			integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
			crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" 
					integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" 
					crossorigin="anonymous"></script>
</head>

<body>
<div class="bg-dark" id="navbarHeader">

    <div class="navbar navbar-expand navbar-dark bg-dark box-shadow">
       
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        	<a class="navbar-brand" href="/dogs">All About Dogs</a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/admin">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/dogs">Edit Dogs</a>
                </li>

                <!-- authientication links -->

                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    
                @else
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
             
        	</ul>
      	</div>
    </div> <!-- end header nav -->
    
</div> <!-- end header -->

	@include('partials/flash')

	<div class="container">
		<div class="row">
			<!-- <h1>{{ $title ?? '' }}</h1> -->
			<div class="main col-md-12">
				
				@yield('content')
			
			</div>
		</div>

		<p class="float-right">
			<a href="#">Back to top</a>
		</p>
	</div>

<div class="inner">
    <nav class="nav nav-mastfoot justify-content-center">
        <a class="nav-link active" href="/">Home</a>
        <a class="nav-link" href="/about">About</a>
        <a class="nav-link" href="/contact">Contact</a>
    </nav>

</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
