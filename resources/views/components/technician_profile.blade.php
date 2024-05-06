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
				<ul class="nav nav-pills1 profile-detail mb-3" id="main-pills-tab" role="tablist">
					<li class="nav-item" role="presentation">
						<button class="nav-link1 active" id="main-pills-home-tab" data-bs-toggle="pill" data-bs-target="#main-pills-home"
							type="button" role="tab" aria-controls="main-pills-home" aria-selected="true">
							<img src="{{ asset('assets/Images/profile-user.svg') }}">Profile
						</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link1" id="main-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#main-pills-profile"
							type="button" role="tab" aria-controls="main-pills-profile" aria-selected="false">
							<img src="assets/Images/service.svg">Service
						</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link1" id="main-pills-contact-tab" data-bs-toggle="pill" data-bs-target="#main-pills-contact"
							type="button" role="tab" aria-controls="main-pills-contact" aria-selected="false">
							<img src="{{ asset('assets/Images/leave.svg') }}">Leave
						</button>
					</li>
				</ul>
			</div>
			<div class="col-lg-9 col-md-9">
				<div class="tab-content" id="main-pills-tabContent">
					<div class="tab-pane fade show active" id="main-pills-home" role="tabpanel" aria-labelledby="main-pills-home-tab"
						tabindex="0">
						<ul class="nav nav-pills mb-3" id="sub-pills-tab" role="tablist">
							<li class="nav-item" role="presentation">
								<button class="nav-link active Personal-Information" id="sub-pills-home-tab" data-bs-toggle="pill"
									data-bs-target="#sub-pills-home" type="button" role="tab" aria-controls="sub-pills-home"
									aria-selected="true">
									<img src="{{ asset('assets\\Images\\user.svg') }}">Personal Information
								</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link Professional-Information" id="sub-pills-profile-tab" data-bs-toggle="pill"
									data-bs-target="#sub-pills-profile" type="button" role="tab" aria-controls="sub-pills -profile"
									aria-selected="false">
									<img src="{{ asset('assets/Images/briefcase 04.svg') }}">Professional Information
								</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link Documents" id="sub-pills-contact-tab" data-bs-toggle="pill"
									data-bs-target="#sub-pills-contact" type="button" role="tab" aria-controls="sub-pills-contact"
									aria-selected="false">
									<img src="{{ asset('/assets/Images/document-text.svg') }}">Documents
								</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link Account-Access" id="sub-pills-contact-tab1" data-bs-toggle="pill"
									data-bs-target="#sub-pills-account-access" type="button" role="tab"
									aria-controls="sub-pills-account-access" aria-selected="false">
									<img src="{{ asset('/assets/Images/lock.svg') }}">Account Access
								</button>
							</li>
						</ul>
					</div>
				</div>
				<div class="tab-content" id="sub-pills-tabContent">
					{{-- first tab --}}
					<div class="tab-pane fade show active Personal-Information" id="sub-pills-home" role="tabpanel"
						aria-labelledby="sub-pills-home-tab" tabindex="0">
						<div class="row">
							<div class="col same-box">
								<label>First Name</label>
								<p>Brooklyn</p>
								{{-- <input class="form-control fill-details" type="text" aria-label="First name" placeholder=""> --}}
							</div>
							<div class="col same-box">
								<label>Last Name</label>
								<p>Simmons</p>
								{{-- <input class="form-control fill-details" type="text" aria-label="Last name" placeholder=""> --}}

							</div>
						</div>
						<div class="row">
							<div class="col same-box">
								<label>Mobile Number</label>
								<p>(702) 555-0122</p>
								{{-- <input class="form-control fill-details" type="number" aria-label="First name" placeholder=""> --}}

							</div>
							<div class="col same-box">
								<label>Email Address</label>
								<p>this@gmail.com</p>
								{{-- <input class="form-control fill-details" type="email" aria-label="Last name" placeholder=""> --}}
							</div>
						</div>
						<div class="row">
							<div class="col same-box">
								<label>Date of Birth</label>
								<p>July 14, 1995</p>
								{{-- <input class="form-control fill-details" type="date" aria-label="First name" placeholder=""> --}}
							</div>
							<div class="col same-box">
								<label>Date of Birth</label>
								<p>Married</p>
								{{-- <input class="form-control fill-details" type="date" aria-label="First name" placeholder=""> --}}
							</div>

						</div>
						<div class="row">
							<div class="col same-box">
								<label>Gender</label>
								<p>Female</p>
								{{-- <input class="form-control fill-details" type="date" aria-label="First name" placeholder=""> --}}
							</div>
							<div class="col same-box">
								<label>Nationality</label>
								<p>America</p>
								{{-- <input class="form-control fill-details" type="date" aria-label="First name" placeholder=""> --}}
							</div>

						</div>
						<div class="row">
							<div class="col same-box">
								<label>Address</label>
								<p>2464 Royal Ln. Mesa, New Jersey</p>
								{{-- <input class="form-control fill-details" type="date" aria-label="First name" placeholder=""> --}}
							</div>
							<div class="col same-box">
								<label>City</label>
								<p>California</p>
								{{-- <input class="form-control fill-details" type="date" aria-label="First name" placeholder=""> --}}
							</div>

						</div>
						<div class="row">
							<div class="col same-box">
								<label>State</label>
								<p>United State</p>
								{{-- <input class="form-control fill-details" type="date" aria-label="First name" placeholder=""> --}}
							</div>
							<div class="col same-box">
								<label>Zip Code</label>
								<p>35624</p>
								{{-- <input class="form-control fill-details" type="date" aria-label="First name" placeholder=""> --}}
							</div>

						</div>
					</div>
					{{-- --------------------------------------------Second-tab---------------------------- --}}
					<div class="tab-pane fade Professional-Information" id="sub-pills-profile" role="tabpanel"
						aria-labelledby="sub-pills-profile-tab" tabindex="0">

						<div class="row">
							<div class="col same-box">
								<label>Employee Type</label>
								<p>Regular</p>
								{{-- <input class="form-control fill-details" type="date" aria-label="First name" placeholder=""> --}}
							</div>
							<div class="col same-box">
								<label>Email Address</label>
								<p>this@gmail.com</p>
								{{-- <input class="form-control fill-details" type="date" aria-label="First name" placeholder=""> --}}
							</div>

						</div>

						<div class="row">
							<div class="col same-box">
								<label>Department</label>
								<p>Cleaning</p>
								{{-- <input class="form-control fill-details" type="date" aria-label="First name" placeholder=""> --}}
							</div>
							<div class="col same-box">
								<label>Designation(Role)</label>
								<p>Janitor</p>
								{{-- <input class="form-control fill-details" type="date" aria-label="First name" placeholder=""> --}}
							</div>

						</div>
						<div class="row">
							<div class="col same-box">
								<label>Working Days</label>
								<p>5 Days</p>
								{{-- <input class="form-control fill-details" type="date" aria-label="First name" placeholder=""> --}}
							</div>
							<div class="col same-box">
								<label>Joining Date</label>
								<p>July 10, 2022</p>
								{{-- <input class="form-control fill-details" type="date" aria-label="First name" placeholder=""> --}}
							</div>

						</div>
						<div class="row">
							<div class="col-6 same-box">
								<label>Office Location</label>
								<p>2464 Royal Ln. Mesa, New Jersey</p>
								{{-- <input class="form-control fill-details" type="date" aria-label="First name" placeholder=""> --}}
							</div>
						</div>



					</div>
				</div>
				<div class="tab-pane fade Documents" id="sub-pills-contact" role="tabpanel"
					aria-labelledby="sub-pills-contact-tab" tabindex="0">...</div>
				{{-- ---------------------------------account-------------------------- --}}

				<div class="tab-pane fade Account-Access" id="sub-pills-account-access" role="tabpanel"
					aria-labelledby="sub-pills-contact-tab1" tabindex="0">
					<div class="row">
						<div class="col same-box">
							<label>Email Address</label>
							<p>this@gmail.com</p>
							{{-- <input class="form-control fill-details" type="date" aria-label="First name" placeholder=""> --}}
						</div>
						<div class="col same-box">
							<label>Expense ID</label>
							<p>EXP 01</p>
							{{-- <input class="form-control fill-details" type="date" aria-label="First name" placeholder=""> --}}
						</div>
						<div class="row">
							<div class="col same-box">
								<label>Vehicle ID</label>
								<p>BR 01</p>
								{{-- <input class="form-control fill-details" type="date" aria-label="First name" placeholder=""> --}}
							</div>
							<div class="col same-box">
								<label>Other ID</label>
								<p>OTH 01</p>
								{{-- <input class="form-control fill-details" type="date" aria-label="First name" placeholder=""> --}}
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="tab-pane fade" id="main-pills-profile-tab" role="tabpanel" aria-labelledby="pills-profile-tab"
			tabindex="0">
			...
		</div>
		{{-- ----------------------------------------------------------- --}}
		<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
			<div class="row">
				<div class="col same-box">
					<label>Email Address</label>
					<p>this@gmail.com</p>
					{{-- <input class="form-control fill-details" type="date" aria-label="First name" placeholder=""> --}}
				</div>
				<div class="col same-box">
					<label>Expense ID</label>
					<p>EXP 01</p>
					{{-- <input class="form-control fill-details" type="date" aria-label="First name" placeholder=""> --}}
				</div>

			</div>

		</div>
		<div class="row">
			<div class="col same-box">
				<label>Vehicle ID</label>
				<p>BR 01</p>
				{{-- <input class="form-control fill-details" type="date" aria-label="First name" placeholder=""> --}}
			</div>
			<div class="col same-box">
				<label>Other ID</label>
				<p>OTH 01</p>
				{{-- <input class="form-control fill-details" type="date" aria-label="First name" placeholder=""> --}}
			</div>

		</div>

	</div>
	</div>

	</div>
	</div>
</x-app-layout>
