<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

	<title>{{ $title ?? '' }}</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
			integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
			crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" 
					integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" 
					crossorigin="anonymous"></script>
	<style>
		
	</style>
</head>

<body>
	<header>
       @include('partials/header') 
    </header> <!-- end header -->	

	<main role="main">

		<div class="album py-5 bg-light">
			<div class="container">
				<h1>{{ $title ?? '' }}</h1>
				<div class="row">
					
					@yield('content')
				
				</div>
				
				<p class="float-right">
					<a href="#">Back to top</a>
				</p>	
			</div>
		</div>

	</main>

	<footer class="mastfoot mt-auto">
		@include('partials/footer')
 	</footer>
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
