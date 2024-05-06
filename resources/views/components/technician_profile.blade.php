<x-app-layout>
	<link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel = "stylesheet"
		integrity = "sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin = "anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
	</script>
	<link href="{{ asset('css/technician_profile.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<style>
		.fade:not(.show) {
			display: none;
		}
	</style>
	<header class="content">
		<nav class="navbar tertiary d-flex">
			<div class="container-fluid nav-baar">
				<div>
					<p class="navbar-brand"> Technician</p>
					<p class="date">Tue, 14 Nov, 2024, 11.30 AM </p>
				</div>


				<div class="search_box">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16">
						<path fill="currentColor"
							d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7c0-2.42-1.72-4.44-4.005-4.901" />
					</svg>

					<div class="input-search">
						<input class="form_input" type="text" placeholder="Search here">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M21.0001 21L16.5141 16.506L21.0001 21ZM19.0001 10.5C19.0001 12.7543 18.1046 14.9163 16.5105 16.5104C14.9165 18.1045 12.7545 19 10.5001 19C8.24578 19 6.08377 18.1045 4.48971 16.5104C2.89566 14.9163 2.00012 12.7543 2.00012 10.5C2.00012 8.24566 2.89566 6.08365 4.48971 4.48959C6.08377 2.89553 8.24578 2 10.5001 2C12.7545 2 14.9165 2.89553 16.5105 4.48959C18.1046 6.08365 19.0001 8.24566 19.0001 10.5V10.5Z"
								stroke="#656575" stroke-width="1.80206" stroke-linecap="round" />
						</svg>
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
						<button class="nav-link1 active" id="main-pills-home-tab" data-bs-toggle="pill" data-bs-target="#main-pills-home1"
							type="button" role="tab" aria-controls="main-pills-home1" aria-selected="true">
							<span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11ZM12 21C15.866 21 19 19.2091 19 17C19 14.7909 15.866 13 12 13C8.13401 13 5 14.7909 5 17C5 19.2091 8.13401 21 12 21Z" fill="#16151C"/>
</svg></span>Profile
						</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link1" id="main-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#main-pills-profile1"
							type="button" role="tab" aria-controls="main-pills-profile1" aria-selected="false">
							<span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M7 22C8.86748 22 10.4361 20.7202 10.8766 18.9899C11.0128 18.4547 11.4477 18 12 18H19M7 22C4.79086 22 3 20.2091 3 18V5C3 3.34315 4.34315 2 6 2H16C17.6569 2 19 3.34315 19 5V18M7 22H19C20.8675 22 22.4361 20.7202 22.8766 18.9899C23.0128 18.4547 22.5523 18 22 18H19M15 7H7M11 12H7" stroke="black" stroke-width="1.5" stroke-linecap="round"/>
</svg></span>Service
						</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link1" id="main-pills-contact-tab" data-bs-toggle="pill" data-bs-target="#main-pills-contact1"
							type="button" role="tab" aria-controls="main-pills-contact1" aria-selected="false">
							<span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8 10H16M8 14H16M8 18H12M8 4C8 5.10457 8.89543 6 10 6H14C15.1046 6 16 5.10457 16 4M8 4C8 2.89543 8.89543 2 10 2H14C15.1046 2 16 2.89543 16 4M8 4H7C4.79086 4 3 5.79086 3 8V18C3 20.2091 4.79086 22 7 22H17C19.2091 22 21 20.2091 21 18V8C21 5.79086 19.2091 4 17 4H16" stroke="#16151C" stroke-width="1.5" stroke-linecap="round"/>
</svg></span>Leave
						</button>
					</li>
				</ul>
			</div>
			<div class="col-lg-9 col-md-9">
				<div class="tab-pane fade show active" id="main-pills-home1" role="tabpanel" aria-labelledby="main-pills-home-tab"
					tabindex="0">
					<div>
						<div>
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
										data-bs-target="#sub-pills-profile" type="button" role="tab" aria-controls="sub-pills-profile"
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

						<div class="tab-content" id="sub-pills-tabContent">
							{{-- Personal Information --}}
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

						</div>

						{{-- Professional Information --}}

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
						{{-- Documents --}}
						<div class="tab-pane fade Documents" id="sub-pills-contact" role="tabpanel"
							aria-labelledby="sub-pills-contact-tab" tabindex="0">
							<div class="row document-sec">
								<div class="col view-image">
									<input class="form-control" type="text" aria-label="Driver's License" placeholder="Driver's License">
									<img src="{{ asset('assets/Images/view-img.svg') }}">
									<img src="{{ asset('assets/Images/download 01.svg') }}">
								</div>
								<div class="col view-image">
									<input class="form-control" type="text" aria-label="Salary Slip_June.pdf"
										placeholder="Salary Slip_June.pdf">
									<img src="{{ asset('assets/Images/view-img.svg') }}">
									<img src="{{ asset('assets/Images/download 01.svg') }}">
								</div>
							</div>
							<div class="row document-sec">
								<div class="col view-image">
									<input class="form-control" type="text" aria-label="" placeholder="Salary Slip_May.pdf">
									<img class="view-image-trigger" src="{{ asset('assets/Images/view-img.svg') }}">
									<img class="view-image-trigger" src="{{ asset('assets/Images/download 01.svg') }}">
								</div>
								<div class="col view-image">
									<input class="form-control" type="text" aria-label="" placeholder="Salary Slip_April.pdf">
									<img src="{{ asset('assets/Images/view-img.svg') }}">
									<img src="{{ asset('assets/Images/download 01.svg') }}">
								</div>
							</div>
							<div class="row document-sec">
								<div class="col view-image">
									<input class="form-control" type="text" aria-label="" placeholder="Reliving Letter.pdf">
									<img src="{{ asset('assets/Images/view-img.svg') }}">
									<img src="{{ asset('assets/Images/download 01.svg') }}">
								</div>
								<div class="col view-image">
									<input class="form-control" type="text" aria-label="" placeholder="Experience Letter.pdf">
									<img src="{{ asset('assets/Images/view-img.svg') }}">
									<img src="{{ asset('assets/Images/download 01.svg') }}">
								</div>
							</div>


						</div>


						{{-- Account Access --}}
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
				{{-- ----------------------- Services------------ --}}
				<div class="tab-pane fade" id="main-pills-profile1" role="tabpanel" aria-labelledby="main-pills-profile-tab"
					tabindex="0">
					<table class="box-table table">
						<thead>
							<tr>
								<th scope="col">Sr. No.</th>
								<th scope="col">Service Name</th>
								<th scope="col">Start Date</th>
								<th scope="col">Finish Date</th>
								<th scope="col">Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Repair Service - TV Repair</td>
								<td>Feb 01, 2023</td>
								<td>Mar 05, 2023</td>
								<td>
									<p class="Completed">Completed</p>
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Repair Service - Dryer Repair</td>
								<td>Feb 12, 2023</td>
								<td>April 20, 2023</td>
								<td>
									<p class="Completed">Completed</p>
								</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Installation - AC Installation</td>
								<td>April 05, 2023</td>
								<td>October 05, 2023</td>
								<td>
									<p class="process">In Process</p>
								</td>
							</tr>
						</tbody>
					</table>

				</div>


				{{-- ---------------------------------- leave----------------------------- --}}
				<div class="tab-pane fade" id="main-pills-contact1" role="tabpanel" aria-labelledby="main-pills-contact-tab"
					tabindex="0">
					<table class="box-table table">
						<thead>
							<tr>
								<th scope="col">Date</th>
								<th scope="col">Duration</th>
								<th scope="col">Days</th>
								<th scope="col">Reporting Manager</th>
								<th scope="col">Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>July 01, 2023</td>
								<td>July 05 - July 08</td>
								<td>3 Days</td>
								<td>Mark Willians</td>
								<td>
									<p class="Pending">Pending</p>
								</td>
							</tr>
							<tr>
								<td>Apr 05, 2023</td>
								<td>Apr 06 - Apr 10</td>
								<td>4 Days</td>
								<td>Mark Willians</td>
								<td>
									<p class="Approved">Approved</p>
								</td>
							</tr>
							<tr>
								<td>Jan 01, 2023</td>
								<td>Jan 16 - Jan 19</td>
								<td>3 Days</td>
								<td>Mark Willians</td>
								<td>
									<p class="Reject">Reject</p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>



</x-app-layout>
