<x-app-layout>
	<link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel = "stylesheet"
		integrity = "sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin = "anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
	</script>
	<link href="{{ asset('css/add_tehnician_style.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<style>

	</style>
	<header class="content">
		<nav class="navbar tertiary d-flex">
			<div class="container-fluid nav-baar">
				<div>
					<p class="navbar-brand">Add New Technician</p>
					<p class="date">Tue, 14 Nov, 2024, 11.30 AM </p>
				</div>


				<div class="search">
					<i class="bi bi-bell"></i>

					<div class="input-search">
						<input class="form-control all-search" type="search" aria-label="Search" style="border: none;"
							placeholder="  Search">
						<i class="bi bi-search"></i>

					</div>

				</div>
			</div>
		</nav>
	</header>
	<div class="main-data">
		<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
			<li class="nav-item" role="presentation">

				<button class="nav-link active Personal-Information" id="pills-home-tab" data-bs-toggle="pill"
					data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
					<img src="{{ asset('assets\Images\user.svg') }}">Personal Information</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link Professional-Information" id="pills-profile-tab" data-bs-toggle="pill"
					data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
					aria-selected="false"><img src="{{ asset('assets/Images/briefcase 04.svg') }}">Professional Information</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link Documents" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
					type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
					<img src="{{ asset('/assets/Images/document-text.svg') }}">Documents</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link Account-Access" id="pills-contact-tab1" data-bs-toggle="pill"
					data-bs-target="#pills-contact2" type="button" role="tab" aria-controls="pills-contact2"
					aria-selected="false"> <img src="{{ asset('/assets/Images/lock.svg') }}">Account Access</button>

			</li>
		</ul>
		{{-- First tab --}}
		<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active Personal-Information" id="pills-home" role="tabpanel"
				aria-labelledby="pills-home-tab">
				<div class="camera">
					<img src="{{ asset('/assets/Images/camera.svg') }}">
				</div>
				<div class="row input-box">
					<div class="col">
						<input class="form-control name-sec" type="text" aria-label="First name" placeholder="First Name">
					</div>
					<div class="col">
						<input class="form-control name-sec" type="text" aria-label="Last name" placeholder="Last name">
					</div>
				</div>
				<div class="row input-box">
					<div class="col">
						<input class="form-control name-sec" type="text" aria-label="Mobile Number" placeholder="Mobile Number">
					</div>
					<div class="col">
						<input class="form-control name-sec" type="text" aria-label="Email Address" placeholder="Email Address">
					</div>
				</div>
				<form class="row input-box">
					<div class="col-md-6">
						<input class="form-control name-sec" id="inputCity" type="date" placeholder="Date of Birth">
					</div>
					<div class="col-md-6">
						<select class="choose form-select">
							<option selected>Marital Status</option>
							<option></option>
						</select>
					</div>

				</form>
				<form class="row input-box">
					<div class="col-md-6">
						<select class="choose form-select">
							<option selected>Gender</option>
							<option></option>
						</select>
					</div>
					<div class="col-md-6">
						<select class="choose form-select">
							<option selected>Nationality</optiia-placon>
							<option></option>
						</select>
					</div>

				</form>

				<div class="input-group flex-nowrap">
					<input class="form-control" type="text" aria-label="Username" aria-describedby="addon-wrapping"
						placeholder="Username">
				</div>
				<form class="row input-box">
					<div class="col-md-4">
						<select class="choose form-select">
							<option selected>City</option>
							<option></option>
						</select>
					</div>
					<div class="col-md-4">
						<select class="choose form-select">
							<option selected>State</optiia-placon>
							<option></option>
						</select>
					</div>
					<div class="col-md-4">
						<select class="choose form-select">
							<option selected>ZIP Code</optiia-placon>
							<option></option>
						</select>
					</div>

				</form>


				<div class="last-btn">
					<button class="cancle">Cancel</button>
					<button class="next">Next</button>
				</div>
			</div>

			{{-- Second tab --}}
			<div class="tab-pane fade Professional-Information" id="pills-profile" role="tabpanel"
				aria-labelledby="pills-profile-tab">
				<div class="row input-box">
					<div class="col">
						<input class="form-control name-sec" type="text" aria-label="Employee ID" placeholder="Employee ID">
					</div>
					<div class="col">
						<input class="form-control name-sec" type="text" aria-label="User Name" placeholder="User Name">
					</div>
				</div>
				<form class="row input-box">
					<div class="col-md-6 col-sm-12">
						<select class="choose form-select">
							<option selected>Select Employee Type</option>
							<option></option>
						</select>
					</div>
					<div class="col-md-6 col-sm-12">
						<input class="form-control name-sec" id="inputCity" type="email" placeholder="Email Address">
					</div>


				</form>
				<form class="row input-box">
					<div class="col-md-6 col-sm-12">
						<select class="choose form-select">
							<option selected>Select Department</option>
							<option></option>
						</select>
					</div>
					<div class="col-md-6 col-sm-12">
						<input class="form-control name-sec" id="inputCity" type="email" placeholder="Enter Designation">
					</div>
				</form>
				<form class="row input-box">
					<div class="col-md-6 col-sm-12">
						<select class="choose form-select">
							<option selected>Select Working Days</option>
							<option></option>
						</select>
					</div>
					<div class="col-md-6 col-sm-12">
						<input class="form-control name-sec" id="inputCity" type="date" placeholder="Select Joining Date">
					</div>
				</form>
				<div class="col-md-12 input-box">
					<select class="choose form-select">
						<option selected>Select Working Days</option>
						<option></option>
					</select>
				</div>
				<div class="last-btn">
					<button class="cancle">Cancel</button>
					<button class="next">Next</button>
				</div>
			</div>
			{{-- Third -Tab --}}
			<div class="tab-pane fade Documents" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
				<div class="row Upload-letter">

					<div class="col-lg-6 col-md-6">
						<label>Upload Appointment Letter</label>
						<div class="Upload-Appointment">
							<img class="openFileExplorer" src="{{ asset('assets/Images/Button.svg') }}">
							<p class="file-upload">Drag & Drop or choose file to upload</p>
							<p class="pdf">Supported formats : Jpeg, pdf</p>
						</div>
					</div>

					<div class="col-lg-6 col-md-6">
						<label>Upload Salary Slips</label>
						<div class="Upload-Appointment">
							<img class="openFileExplorer" src="{{ asset('assets/Images/Button.svg') }}">
							<p class="file-upload">Drag & Drop or choose file to upload</p>
							<p class="pdf">Supported formats : Jpeg, pdf</p>
						</div>
					</div>
				</div>
				<div class="row Upload-letter">

					<div class="col-lg-6 col-md-6">
						<label>Upload Reliving Letter</label>
						<div class="Upload-Appointment">
							<img class="openFileExplorer" src="{{ asset('assets/Images/Button.svg') }}">
							<p class="file-upload">Drag & Drop or choose file to upload</p>
							<p class="pdf">Supported formats : Jpeg, pdf</p>
						</div>
					</div>

					<div class="col-lg-6 col-md-6">
						<label>Upload Experience Letter</label>
						<div class="Upload-Appointment">
							<img class="openFileExplorer" src="{{ asset('assets/Images/Button.svg') }}">
							<p class="file-upload">Drag & Drop or choose file to upload</p>
							<p class="pdf">Supported formats : Jpeg, pdf</p>
						</div>
					</div>
				</div>
				<div class="last-btn">
					<button class="cancle">Cancel</button>
					<button class="next">Next</button>
				</div>
			</div>
			{{-- Last-tab --}}
			<div class="tab-pane fade Account-Access" id="pills-contact2" role="tabpanel"
				aria-labelledby="pills-contact-tab1">
				<div class="row input-box">
					<div class="col">
						<input class="form-control name-sec" type="text" aria-label="First name" placeholder="Enter Email Address">
					</div>
					<div class="col">
						<input class="form-control name-sec" type="text" aria-label="Last name" placeholder="Enter Slack ID">
					</div>
				</div>
				<div class="row input-box">
					<div class="col">
						<input class="form-control name-sec" type="text" aria-label="First name" placeholder="Enter Skype ID">
					</div>
					<div class="col">
						<input class="form-control name-sec" type="text" aria-label="Last name" placeholder="Enter  ID">
					</div>
				</div>
				<div class="last-btn">
					<button class="cancle">Cancel</button>
					<button class="next">Add</button>
				</div>

			</div>
		</div>
	</div>
	<script>
		function handleImageClick(event) {
			// Your desired functionality goes here
			// For example, opening a file explorer or gallery
			const input = document.createElement('input');
			input.type = 'file';
			input.click();
		}

		// Get all image elements
		const imageElements = document.querySelectorAll('.openFileExplorer');

		// Attach the click event listener to each image
		imageElements.forEach(imageElement => {
			imageElement.addEventListener('click', handleImageClick);
		});
	</script>
</x-app-layout>
