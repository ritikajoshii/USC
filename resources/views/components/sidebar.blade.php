<!DOCTYPE html>
<html>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css') }}"
			rel="stylesheet">
		<link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"') }}"
			rel="stylesheet"integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
			crossorigin="anonymous">
		<style>
			body {
				margin: 0;
				font-family: "Lato", sans-serif;
			}

			.sidebar {
				margin: 0;
				padding: 0;
				width: 240px;
				background-color: #232F4B;
				color: #ffff;
				position: fixed;
				height: 100%;
				overflow: auto;
			}

			.sidebar a {
				display: block;
				color: #ffff;
				padding: 16px;
				text-decoration: none;

			}



			div.content {
				margin-left: 200px;
				padding: 1px 16px;
				height: 1000px;
			}

			@media screen and (max-width: 700px) {
				.sidebar {
					/* width: 100%; */
					height: auto;
					position: relative;
				}

				.sidebar a {
					float: left;
				}

				div.content {
					margin-left: 0;
				}
			}

			@media screen and (max-width: 400px) {
				.sidebar a {
					text-align: center;
					float: none;
				}
			}

			.united-service {
				padding: 15px 25px;
			}

			.setting {
				padding-bottom: 20px;
				text-decoration: underline 5px solid rgb(238, 229, 229) 2px;
			}
		</style>
	</head>

	<body>

		<div class="sidebar">
			<h3 class="united-service">United Service Company</h3>
			<a id="dashboard" href="{{ route('dashboard') }}">Dashboard</a>
			<a id="user" href="{{ route('user_management') }}">User</a>
			<a id="technician" href="{{ route('technician') }}">Technician</a>
			<a href="#about">Bookings</a>
			<a href="#about">Notifications</a>
			<a class="setting" href="#about">Settings</a>
			<a href="#about">Report</a>
			<a href="#about">Payment Details</a>
			<a href="#about">Transactions</a>
		</div>




	</body>

</html>
