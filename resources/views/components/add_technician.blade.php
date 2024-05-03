<x-app-layout>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
		#technician {
			background-color: #8B0D35;
		}

		body {
			background-color: rgb(219 202 202 / 20%);
		}

		.content {
			background-color: transparent;

			padding: 15px 16px;
			z-index: 999px;
			/* position: fixed; */
			border-bottom: 1px solid gray;
		}

		.date {
			line-height: 0;
			color: #A3A3A3;
			font-size: 14px;
		}

		.nav-baar {
			justify-content: space-between;
			display: flex;
		}

		.navbar-brand {
			color: #525256;
			font-size: 20px;
			font-weight: 500;
		}

		.search {
			display: flex;
		}

		.bi-bell {
			height: 24px;
			width: 24px;
			padding-right: 20px;
			margin-top: 15px;
			color: #525256;
		}

		.input-search {
			display: flex;
			justify-content: space-between;
			background-color: #ffff;
			padding-right: 30px;
			height: 38px;
			margin-top: 10px;
			border-radius: 15px;

		}

		input.form-control {
			border-radius: 15px;
			overflow: hidden;
			height: 100%;
			width: 100%;
			outline: none;
			border: none;
			padding-left: 20px
		}

		/* input.form-control::placeholder {
				padding-left: 10px;
			} */

		.bi-search {
			margin-top: 10px;
		}
	</style>
	<header class="content">
		<nav class="navbar tertiary d-flex">
			<div class="container-fluid nav-baar">
				<div>
					<p class="navbar-brand">Todays Statistics</p>
					<p class="date">Tue, 14 Nov, 2024, 11.30 AM </p>
				</div>


				<div class="search">
					<i class="bi bi-bell"></i>

					<div class="input-search">
						<input class="form-control" type="search" aria-label="Search" placeholder="  Search">
						<i class="bi bi-search"></i>

					</div>

				</div>
			</div>
		</nav>
	</header>
	<div class="main-data">
		<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
			<li class="nav-item" role="presentation">
				<button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
					type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button"
					role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button"
					role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled"
					type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" disabled>Disabled</button>
			</li>
		</ul>
		<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
				gcghf
			</div>
			<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
				<!-- Content for Profile Tab -->
			</div>
			<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
				<!-- Content for Contact Tab -->
			</div>
			<div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab">
				<!-- Content for Disabled Tab -->
			</div>
		</div>
	</div>

</x-app-layout>
