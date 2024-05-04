<x-app-layout>
	<link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel = "stylesheet"
		integrity = "sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin = "anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
	</script>
	<link href="{{ asset('css/technician_profile.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">

	<header class="content">
		<nav class="navbar tertiary d-flex">
			<div class="container-fluid nav-baar">
				<div>
					<p class="navbar-brand"> Technician</p>
					<p class="date">Tue, 14 Nov, 2024, 11.30 AM </p>
				</div>


				<div class="search">
					<i class="bi bi-bell"></i>

					<div class="input-search">
						<input class="form-control all-search" type="search" aria-label="Search" placeholder="  Search">
						<i class="bi bi-search"></i>

					</div>

				</div>
			</div>
		</nav>
	</header>
	<div class="main-section">
		<div class="row top-section">
			<div class="col-lg-9 col-md-9">
				<div class="profile-sec">
					<div>
						<img src="{{ asset('assets/Images/profile.svg') }}">
					</div>
					<div class="ac-repair">
						<p class="this-ali-1">This Ali</p>
						<p class="this-ali-2"><img src="{{ asset('assets/Images/briefcase 04.svg') }}">AC Repair</p>
						<p class="this-ali-3"><img src="{{ asset('assets/Images/gmail.svg') }}">this@gmail.com</p>
					</div>
				</div>

			</div>
			<div class="col-lg-3 col-md-3">
				<button class="edit-btn"><img src="{{ asset('assets/Images/edit-btn.svg') }}">Edit Profile</button>

			</div>
		</div>

		<div class="row tab-section">
			<div class="col-lg-3 col-md-3 change-tabs">
				<ul class="nav nav-pills1 profile-detail mb-3" id="pills-tab" role="tablist">
					<li class="nav-item" role="presentation">
						<button class="nav-link1 active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
							type="button" role="tab" aria-controls="pills-home" aria-selected="true">
							<img src="{{ asset('assets/Images/profile-user.svg') }}">Profile</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link1" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
							type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
							<img src="assets/Images/service.svg">Service</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link1" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
							type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
							<img src="{{ asset('assets/Images/leave.svg') }}">Leave</button>
					</li>

				</ul>
			</div>
			<div class="col-lg-9 col-md-9">
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
						tabindex="0">
						<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
							<li class="nav-item" role="presentation">

								<button class="nav-link active Personal-Information" id="pills-home-tab" data-bs-toggle="pill"
									data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
									<img src="{{ asset('assets\Images\user.svg') }}">Personal Information</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link Professional-Information" id="pills-profile-tab" data-bs-toggle="pill"
									data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
									aria-selected="false"><img src="{{ asset('assets/Images/briefcase 04.svg') }}">Professional
									Information</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link Documents" id="pills-contact-tab" data-bs-toggle="pill"
									data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
									aria-selected="false">
									<img src="{{ asset('/assets/Images/document-text.svg') }}">Documents</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link Account-Access" id="pills-contact-tab1" data-bs-toggle="pill"
									data-bs-target="#pills-contact2" type="button" role="tab" aria-controls="pills-contact2"
									aria-selected="false"> <img src="{{ asset('/assets/Images/lock.svg') }}">Account Access</button>

							</li>
						</ul>
					</div>

				</div>
				<div class="tab-content" id="pills-tabContent">
					<div class="Personal-Information tab-pane fade show active" id="pills-home" role="tabpanel"
						aria-labelledby="pills-home-tab" tabindex="0">...</div>
					<div class="tab-pane fade Professional-Information" id="pills-profile" role="tabpanel"
						aria-labelledby="pills-profile-tab" tabindex="0">...</div>
					<div class="tab-pane fade Documents" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
						tabindex="0">...</div>
					<div class="tab-pane fade Account-Access" id="pills-disabled" role="tabpanel"
						aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
				</div>

				{{-- <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
						tabindex="0">
						...
					</div>
					<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
						tabindex="0">
						...
					</div> --}}
			</div>

		</div>
	</div>
</x-app-layout>
