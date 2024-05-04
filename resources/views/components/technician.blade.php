<x-app-layout>
	<link type="text/css" href="{{ asset('https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css') }}"
		rel="stylesheet">



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

		/* ********************************************* */
		.main-data {
			position: relative;
			/* clear: both; */
			/* width: 100%; */

			margin-top: 30px;
			border: 1px solid #A2A1A8;
			border-radius: 10px;
			padding: 10px;
		}

		div#example_filter {
			text-align: start;
			float: left;
		}



		.view-edit-btn {
			display: flex;
			border: none;
			background-color: transparent;
			gap: 10px;

		}

		table.dataTable tbody tr {
			background-color: transparent !important;
		}

		table.dataTable thead th,
		table.dataTable thead td {
			color: #A2A1A8;
			font-weight: 300;
			padding: 10px 18px;
			border-bottom: 1px solid lightgray;
		}

		table.dataTable.display tbody tr.even>.sorting_1,
		table.dataTable.order-column.stripe tbody tr.even>.sorting_1 {
			background-color: none !important;
		}

		.button-top {
			padding: 30px;
			/* padding-right: 30px; */
			justify-content: space-between;
			display: flex;
			/* justify-content: space-evenly; */
		}

		.button-top .add-Technician {
			display: flex;
			border: none;
			align-items: center;
			margin-right: 50px;
			background-color: #232F4B;
			color: #ffff;
			padding: 10px 30px;
			border-radius: 10px;
		}

		.button-top .add-Technician img {
			padding-right: 5px;
		}

		.filtter-butn {
			align-items: center;
			display: flex;
			border: 1px solid #A2A1A8;
			border-radius: 10px;
			padding: 0px 22px;
		}

		.filtter-butn img {
			padding-right: 10px;
		}

		div#example_info {
			margin-left: 35%;
			display: flex;
			justify-content: center;
			text-align: center;

		}

		table.dataTable.no-footer {
			border-bottom: 1px solid lightgray;
		}

		.On-Service {
			text-align: center;
			background-color: #d6e2f4;
			color: #006AFF;
			font-size: 12px;
			border-radius: 4px;
			padding: 2px 8px;
			width: fit-content;
		}



		.inactive {
			font-size: 12px;
			color: #8B0D35;
			background-color: #ffc9da93;
			text-align: center;
			border-radius: 4px;
			padding: 2px 8px;
			width: fit-content;
		}

		.Idle {
			padding: 2px 8px;
			width: fit-content;
			text-align: center;
			color: #656575;
			background-color: #dfdfe9;
			font-size: 12px;
			border-radius: 4px;
		}

		/* model box */
		/* The Modal (background) */
		.modal {
			display: none;
			/* Hidden by default */
			position: fixed;
			/* Stay in place */
			z-index: 1;
			/* Sit on top */
			padding-top: 100px;
			/* Location of the box */
			left: 0;
			top: 0;
			width: 100%;
			/* Full width */
			height: 100%;
			/* Full height */
			overflow: auto;
			/* Enable scroll if needed */
			background-color: rgb(0, 0, 0);
			/* Fallback color */
			background-color: rgba(0, 0, 0, 0.4);
			/* Black w/ opacity */
		}

		/* Modal Content */
		.modal-content {
			background-color: #fefefe;
			margin-left: 40%;
			margin-top: 10%;
			padding: 20px;
			border: 1px solid #888;
			width: 25%;
		}

		/* The Close Button */


		.close:hover,
		.close:focus {
			color: #000;
			text-decoration: none;
			cursor: pointer;
		}


		.search-employe {
			display: flex;
			width: 100%;
			border: 1px solid lightgray;
			border-radius: 5px;
			height: 50px;
		}

		.search-employe img {
			margin-left: 10px;
			margin-top: 10px;
			height: 24px;
			width: 24px;
			text-align: center;


		}

		.search-employe input {
			border: none;
			overflow: hidden;
			outline: none;
			width: 100%;
			height: 100%;
		}

		.select-type {
			padding-top: 13px;
			font-size: 16px;
			font-weight: 600;
			color: #16151C;
		}

		.form-check-input:checked {
			color: black;
			background-color: #000;
			border-color: #000;
			outline: none;
		}

		.aply-cancle button {
			font-size: 16px;
			margin-top: 10px;
		}

		button#Apply {
			background-color: #232F4B;
			color: #fff;
			padding: 10px 30px;
			border: none;
			border-radius: 10px;
		}

		button#cencle {
			background-color: transparent;
			border: 1px solid #A2A1A8;
			padding: 10px 30px;
			color: black;
			border-radius: 10px;
		}

		button#cencle:hover {
			background-color: #232F4B;
			color: #fff;
		}

		.search-table {
			display: flex;
			width: 300px;
			border: 1px solid lightgray;
			border-radius: 5px;
			height: 50px;
		}

		.search-table input {
			border: none;
			overflow: hidden !important;
			outline: none !important;
			width: 100%;
			height: 100%;
			background-color: transparent;
		}

		.search-table img {
			margin-left: 10px;
			margin-top: 10px;
			height: 24px;
			width: 24px;
			text-align: center;
		}



		.this-all {
			display: flex;
			text-align: center;
			align-items: center;

		}

		.this-all img {
			padding-right: 8px;
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
		<table class="display" id="example" style="width:100%">

			<thead class="heading">
				<div class="button-top">
					<div class="search-table">
						<img src="{{ asset('assets/Images/🔽 Icon.svg') }}"><input id="searchInput" type="text" placeholder=" Search">
					</div>
					<div class="d-flex">
						<a href="{{ route('add_technician') }}" style="text-decoration: none;"><button class="add-Technician"> <img
									src="{{ asset('assets/Images/add-circle.svg') }}">Add New Technician</button></a>
						<button class="filtter-butn" id="myBtn"><img src="{{ asset('assets/Images/Filter.svg') }}">Filtter</button>
					</div>
				</div>
				<tr>
					<th>Technician Name</th>
					<th>Mobile Number</th>
					<th>Email</th>
					<th>Location</th>
					<th>Total Order</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody class="list" id="tableBody">
				<tr>
					<td class="d-flex this-all"><img src="{{ asset('assets/Images/Ellipse 1192.svg') }}"> Tech Ali</td>
					<td>345321231</td>
					<td>this@gmail.com</td>
					<td>Doha</td>
					<td>10</td>
					<td>
						<p class="Idle">Idle</p>
					</td>
					<td><button class="view-edit-btn"><img src="{{ asset('assets/Images/view.svg') }}">
							<img src="{{ asset('assets/Images/edit.svg') }}">
							<img src="{{ asset('assets/Images/trash 01.svg') }}">
						</button></td>
				</tr>
				<tr>
					<td class="d-flex this-all"><img src="{{ asset('assets/Images/Ellipse 1192.svg') }}">Tech Ali</td>
					<td>345321231</td>
					<td>this@gmail.com</td>
					<td>Doha</td>
					<td>10</td>
					<td>
						<p class="On-Service">On Service</p>
					</td>
					<td><button class="view-edit-btn"><img src="{{ asset('assets/Images/view.svg') }}">
							<img src="{{ asset('assets/Images/edit.svg') }}">
							<img src="{{ asset('assets/Images/trash 01.svg') }}">
						</button></td>
				</tr>









			</tbody>


			{{-- model box --}}
			<div class="">
				<div class="modal" id="myModal">


					<div class="modal-content">
						<p style="color:#16151C; font-size:20px; font-weight:bold;">Filter</p>
						<div class="search-employe"><img src="{{ asset('assets/Images/🔽 Icon.svg') }}"><input type="text"
								placeholder="Search Employee">
						</div>
						<p class="select-type">Select Type</p>

						<div class="d-flex radio">
							<div class="form-check form-check-inline">
								<input class="form-check-input" id="inlineCheckbox1" type="checkbox" value="option1">
								<label class="form-check-label" for="inlineCheckbox1" style="font-size:13px;">Idle</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" id="inlineCheckbox2" type="checkbox" value="option2">
								<label class="form-check-label" for="inlineCheckbox2" style="font-size:13px;">On Service</label>
							</div>

						</div>


						<div class="d-flex aply-cancle" style="justify-content: end; gap:10px;">
							<button class="close" id="cencle">Cencle</button>
							<button class="close1" id="Apply">Apply</button>
						</div>
					</div>

				</div>

			</div>
		</table>
	</div>
	<script src="{{ asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js') }}"
		integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
	</script>

	<script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js') }}"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable({
				paging: true, // Enable paging
				pagingType: 'simple_numbers', // Display simple numeric pagination
				lengthChange: false, // Disable the "Show [x] entries" dropdown
				searching: false, // Enable search functionality
				ordering: true, // Enable ordering
				info: true, // Enable info (page [x] of [y])
				responsive: true // Enable responsive mode
			});
		});
	</script>

	{{-- modal box javascript --}}
	<script>
		// Get the modal
		var modal = document.getElementById("myModal");

		// Get the button that opens the modal
		var btn = document.getElementById("myBtn");

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks the button, open the modal 
		btn.onclick = function() {
			modal.style.display = "block";
		}

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
			modal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	</script>

	{{-- Search  --}}

	<script>
		const searchInput = document.getElementById('searchInput');
		const tableBody = document.getElementById('tableBody');
		const rows = tableBody.getElementsByTagName('tr');

		searchInput.addEventListener('input', function() {
			const searchText = this.value.toLowerCase();

			for (let i = 0; i < rows.length; i++) {
				const row = rows[i];
				const rowText = row.textContent.toLowerCase();

				if (rowText.includes(searchText)) {
					row.style.display = 'table-row';
				} else {
					row.style.display = 'none';
				}
			}
		});
	</script>


</x-app-layout>
