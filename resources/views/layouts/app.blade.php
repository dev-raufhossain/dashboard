<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AdminHub</title>
    @include('layouts.partials.styles')
</head>
<body>

	<!-- SIDEBAR -->
@include('layouts.partials.sidebar')
	<!-- SIDEBAR -->

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
@include('layouts.partials.navbar')
		<!-- NAVBAR -->

		<!-- MAIN -->
        @yield('content')
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	@include('layouts.partials.scripts')
</body>
</html>
