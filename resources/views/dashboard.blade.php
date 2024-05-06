<x-app-layout>
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<style>
		body {
			background-color: rgb(219 202 202 / 20%);
		}


		/* *******************Dashboard Page***************************** */
		.main-dv {
			display: flex;
			margin-top: 50px;
			/* background-color: rgb(219 202 202 / 20%); */
		}

		#dashboard {
			background-color: #8B0D35;
			color: #fff;
		}


		.first-dv {
			display: flex;
			justify-content: space-between;
			padding: 0px 30px;
			border-radius: 10px;
			background-color: lightblue;
			height: 102px;

		}

		.bi-person-fill::before {
			text-align: center;
			content: "\f4da";
			color: #068B92;
		}

		.user-icon1 {
			justify-content: space-around;
			align-items: center;
			display: flex;
			margin-top: 23px;
			width: 47px;
			height: 47px;
			border-radius: 50%;
			background-color: #079AA2;
			align-content: stretch;
			justify-content: space-around;
		}

		.first-dv .user {
			margin-top: 0px;

			color: #068B92;
			font-size: 13px;
			text-align: right;
		}

		.first-dv .total {
			font-size: 20px;
			padding-top: 35px;
			color: #232D42;

		}

		.second-dv {
			margin-top: 30px;
			display: flex;
			justify-content: space-between;
			padding: 0px 30px;
			border-radius: 10px;
			background-color: #e8ad8a;
			height: 102px;
		}

		.img-sec1 .user-icon2 {
			justify-content: space-around;
			align-items: center;
			display: flex;
			margin-top: 23px;
			width: 47px;
			height: 47px;
			border-radius: 50%;
			background-color: #f5823e;
			align-content: stretch;
			justify-content: space-around;
		}

		.second-dv .total2 {
			font-size: 20px;
			padding-top: 35px;
			color: #232D42;

		}

		.bi-person-fill2::before {
			text-align: center;
			content: "\f4da";
			color: #D95F18;
		}

		.last-dv {
			margin-top: 30px;
			display: flex;
			justify-content: space-between;
			padding: 0px 30px;
			border-radius: 10px;
			background-color: #f2a49b;
			height: 102px;

		}


		.img-sec2 .user-icon3 {
			justify-content: space-around;
			align-items: center;
			display: flex;
			margin-top: 23px;
			width: 47px;
			height: 47px;
			border-radius: 50%;
			background-color: #dd7d72;

			align-content: stretch;
			justify-content: space-around;
		}

		.last-dv .total3 {
			font-size: 20px;
			padding-top: 35px;
			color: #232D42;

		}

		.bi-person-fill3::before {
			text-align: center;
			content: "\f4da";
			color: #D95F18;
		}

		/* **********************Second-section************************* */
		.colum-box {
			justify-content: space-between;
			width: 100%;
			padding: 0px 30px;
			display: flex;
			flex-wrap: nowrap;
			width: 100%;
		}

		.Income {

			background-color: #ffff;
			padding: 5px 10px;
			border-radius: 7px;


		}

		.Expences {
			background-color: #ffff;
			padding: 5px 10px;
			border-radius: 7px;
		}

		.Average {
			background-color: #ffff;
			padding: 5px 10px;
			border-radius: 7px;
		}




		.Compared {
			color: #656575;
			font-size: 10px;
		}

		.last-week {
			font-size: 10px;
		}

		.QAR {
			font-size: 10px;
			padding-left: 3px;
			color: #525256;
			font-weight: 500;
		}

		.table-dv {
			padding: 20px;
			margin-left: 20px;
			margin-top: 30px;
			background-color: #ffff;

		}

		.details {
			padding: 3px 10px;
			background-color: #232F4B;
			border: none;
			color: #FFFFFF;
			border-radius: 4px;
		}

		.text-start {
			margin-left: 10px;
			text-align: left !important;
		}

		.table th {
			color: #656575;
			font-weight: 300;

		}

		.active_btn {
			width: 16px;
			height: 16px;
			border-radius: 50%;
			background-color: #52C93F;
			border: none;
			margin-right: 5px;
		}

		td.complete {
			color: #656575;
			font-size: 16px;
		}



		.name img {
			padding-right: 5px;
		}

		.panding_btn {
			width: 16px;
			height: 16px;
			border-radius: 50%;
			background-color: #006AFF;
			border: none;
			margin-right: 5px;
		}

		.route_btn {
			width: 16px;
			height: 16px;
			border-radius: 50%;
			background-color: #FF2727;
			border: none;
			margin-right: 5px;
		}

		.filtter-btn {
			display: flex;
			border: none;
			background-color: transparent;
		}

		.filtter-btn img {
			padding-right: 10px;
		}

		.graph-dv {
			background-color: #ffff;
		}

		td.name {
			display: flex;
			color: #1A1919;
			font-size: 16px;
		}

		.in-today {
			padding-bottom: 5px;
			border-bottom: 1px solid lightgray;

		}

		.q-a-r {
			padding: 10px 0px;
			color: #01150C;
			font-weight: 700;
			font-size: 24px;
		}

		.today {
			padding: 5px 10px;
			background-color: #F4F5F7;
			font-size: 10px;
			border-radius: 10px;
			color: #656575;
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
	<div class="container-fuild main-section">
		<div class="row">
			<div class="main-dv">
				<div class="col-lg-3 col-md-3 first-sec">
					<div class="first-dv">
						<div class="img-sec">
							<div class="user-icon1"><i class="bi bi-person-fill"></i></div>
						</div>
						<div class="content-sec">
							<p class="total">6600</p>
							<p class="user">User</p>
						</div>

					</div>
					<div class="second-dv">
						<div class="img-sec1">
							<div class="user-icon2"><i class="bi bi-person-fill2"></i></div>
						</div>
						<div class="content-sec">
							<p class="total2">6600</p>
							<p class="user">User</p>
						</div>


					</div>
					<div class="last-dv">
						<div class="img-sec2">
							<div class="user-icon3"><img src="{{ asset('assets/Images/Vector.svg') }}"></div>
						</div>
						<div class="content-sec">
							<p class="total3">6600</p>
							<p class="user">User</p>
						</div>


					</div>
				</div>
				{{-- ----------------------------Second-Section---------------------------------------- --}}
				<div class="col-lg-9 col-md-9 second-sec" style="padding-right:12px;">
					<div class="container text-start">
						<div class="row align-items-start">
							<div class="col-lg-4 col-md-4">
								<div class="Income shadow">
									<div class="d-flex justify-content-between in-today">
										<p style="color: #656575; font-size:15px;">Income</p>
										<p class="today">Today</p>
									</div>
									<p class="q-a-r">QAR 9460.00</p>
									<p class="Compared">Compared to QAR 9940 yesterday</p>
									<div class="d-flex">
										<p class="last-week">Last week Income</p>
										<p class="QAR">QAR 25658.00</p>
									</div>
								</div>
							</div>
							<div class="collg-4 col-md-4">
								<div class="Expences shadow">
									<div class="d-flex justify-content-between in-today">
										<p style="color: #656575; font-size:15px;">Expences</p>
										<p class="today">Today</p>
									</div>
									<p class="q-a-r">QAR 566.00</p>
									<p class="Compared">Compared to QAR 5240 yesterday</p>
									<div class="d-flex">
										<p class="last-week">Last week expences</p>
										<p class="QAR">QAR 22658.00</p>
									</div>
								</div>

							</div>
							<div class="col-lg-4 col-md-4">
								<div class="Average shadow">
									<div class="d-flex justify-content-between in-today">
										<p style="color: #656575; font-size:15px;">Average Transpost</p>
										<p class="today">Today</p>
									</div>
									<p class="q-a-r">QAR 2648</p>
									<p class="Compared">Compared to QAR 5240 yesterday</p>
									<div class="d-flex">
										<p class="last-week">Last week expences</p>
										<p class="QAR">QAR 22658.00</p>
									</div>

								</div>
							</div>
						</div>
					</div>

					<div class="table-dv">

						<table class="table">
							<div class="d-flex justify-content-between">
								<p style="color: #1A1919; font-weight:600;">Technician</p>
								<button class="filtter-btn"><img src="{{ asset('assets/Images/Filter.svg') }}">Filtter</button>
							</div>
							<thead>
								<tr>
									<th scope="col">No</th>
									<th scope="col">Service</th>
									<th scope="col">Name</th>
									<th scope="col">Status</th>
									<th scope="col">Earning</th>
									<th></th>


								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">01</th>
									<td class="number">6465</td>
									<td class="name"><img src="{{ asset('assets/Images/Ellipse 7.svg') }}">Noman</td>
									<td class="complete"><button class="active_btn"></button>Completed</td>
									<td>QAR 35.44</td>
									<td><button class="details">Details</button></td>
								</tr>
								<tr>
									<th scope="row">01</th>
									<td class="number">6465</td>
									<td class="name"><img src="{{ asset('assets/Images/Ellipse 7 (1).svg') }}">Noman</td>
									<td class="complete"><button class="panding_btn"></button>Completed</td>
									<td>QAR 35.44</td>
									<td><button class="details">Details</button></td>
								</tr>
								<tr>
									<th scope="row">01</th>
									<td class="number">6465</td>
									<td class="name"><img src="{{ asset('assets/Images/Ellipse 7 (2).svg') }}">Noman</td>
									<td class="complete"><button class="route_btn"></button>Completed</td>
									<td>QAR 35.44</td>
									<td><button class="details">Details</button></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="graph-dv">

					</div>
				</div>
			</div>

		</div>
	</div>
	</div>

</x-app-layout>
