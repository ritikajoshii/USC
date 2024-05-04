<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>{{ config('app.name', 'Laravel') }}</title>

		<!-- Fonts -->

		<link href="https://fonts.bunny.net" rel="preconnect">
		<link href="{{ asset('https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap') }}" rel="stylesheet" />
		<link href='{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css') }}'
			rel="stylesheet">
		<link href='{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css') }}'
			rel="stylesheet"integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
			crossorigin="anonymous">
		<script src="{{ asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js') }}"
			integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
			@vite(['resources/css/app.css', 'resources/js/app.js'])
		</script>




	</head>

	<body class="font-sans antialiased">
		<div class="min-h-screen bg-gray-100">
			{{-- @include('layouts.navigation') --}}
			@include('components.sidebar')

			<!-- Page Heading -->
			@if (isset($header))
				{{-- <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                        
                    </div>
                </header> --}}
			@endif

			<!-- Page Content -->
			<main>
				<div style="margin-left: 250px; margin-right:30px;">

					{{ $slot }}
				</div>
			</main>
		</div>
	</body>

</html>
