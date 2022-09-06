<!DOCTYPE html>
<html lang="en">
   
<head>
	<meta charset="UTF-8">
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<link rel="icon" type="image/png" href="{{ asset('assets/favicon.png') }}" />
    
  <link rel="stylesheet" href="{{ asset('css/intlTelInput.css') }}">
  <link rel="stylesheet" href="{{ asset('css/demo.css') }}">
	<script src="https://kit.fontawesome.com/2c1e5308ba.js" crossorigin="anonymous"></script>
	<title>UNIRANKS</title>
</head>

<body>
	<!--TOP NAV OPEN-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-blue">
		<div class="container-fluid container px-md-0">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-4">
					<li class="nav-item"> <a class="nav-link active" aria-current="page" href="#">Home</a> </li>
					<li class="nav-item"> <a class="nav-link" href="#">Ranking</a> </li>
					<li class="nav-item"> <a class="nav-link" href="#">Events</a> </li>
					<li class="nav-item"> <a class="nav-link" href="#">Discover</a> </li>
					<li class="nav-item"> <a class="nav-link" href="#">Prepare</a> </li>
					<li class="nav-item"> <a class="nav-link" href="#">Apply</a> </li>
					<li class="nav-item"> <a class="nav-link" href="#">Careers</a> </li>
					<li class="nav-item"> <a class="nav-link" href="#">Community</a> </li>
				</ul>
				<form class="d-flex">
					<div class="btn-group">
						<button class="dropdown-toggle text-light" style="background-color: transparent !important;border:0px !important;" type="button" id="dropdownMenuClickableOutside" data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="false"> <img src="assets/avatar.png" height="50"> <span class="text-light">David Scott</span></button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableOutside">
							<li><a class="dropdown-item" href="#">Settings</a></li>
							<li><a class="dropdown-item" href="#">Logout</a></li>
						</ul>
					</div>
				</form>
			</div>
		</div>
	</nav>
	<!--TOP NAV CLOSED-->
	<!-- HEADER START -->
	<nav id="navbar_top" class="navbar navbar-expand-lg  navbar-light bg-white" style="padding-top:0px !important">
		<div class="container-fluid container px-md-0">
			<a class="navbar-brand px-3" href="#"> <img src="{{ asset('assets/logo.png') }}" height="35"> </a>
			<div class="collapse navbar-collapse ms-5" id="navbarSupportedContent">
				<ul class="navbar-nav new-nav me-auto  mb-2 mb-lg-0 mt-3">
					<li class="nav-item">
						<a class="nav-link" href="#"> <i class="fa fa-home ic_style"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"> <i class="fa fa-clipboard ic_style"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"> <i class="fa fa-question ic_style"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"> <i class="fas fa-reply-all ic_style"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"> <i class="fa fa-group ic_style"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"> <i class="fa fa-bell ic_style"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"> <i class="fa fa-comments ic_style"></i></a>
					</li>
				</ul>
				<form class="d-flex">
					<ul class="navbar-nav mt-3 px-5">
						<li class="nav-link">
							<a class="nav-link" href="#"> <i class="fa fa-facebook ic_style"></i></a>
						</li>
						<li class="nav-link">
							<a class="nav-link" href="#"> <i class="fa fa-twitter ic_style"></i></a>
						</li>
						<li class="nav-link">
							<a class="nav-link" href="#"> <i class="fa fa-instagram ic_style"></i></a>
						</li>
						<li class="nav-link">
							<button class="btn btn-blue" type="submit">&nbsp;<img src="{{ asset('assets/icons/ic_world.png') }}" width="30">&nbsp;&nbsp;Language(En)</button>
						</li>
					</ul>
				</form>
			</div>
		</div>
	</nav>
	<div class="bg-blue">
		<div class="container px-md-0 p-3">
			<div class="row container px-md-0">
				<div class="col-lg-2"> <img src="{{ asset('assets/thomas.png') }}" height="150" class="float-end"> </div>
				<div class="col-lg-8 mt-4">
					<p class="h4 text-light mb-4">Thomas Jefferson High School for Science and Technology</p>
					<p class="h6 text-light mb-3">6560 Braddock Rd, Alexandria, Virginia</p>
					<p class="h6 text-light">School Counselor Account </p>
				</div>
				<div class="col-lg-2 mt-4">
					<p class="h4 text-light mb-4">Account Info</p>
					<p class="h6 text-light mb-3">Type A</p>
					<p class="h6 text-light">Balance 0 </p>
				</div>
			</div>
		</div>
	</div>
	<div class="container px-md-0">
		<div class="row container px-md-0">
			<div class="row shadow-sm mb-5 bg-white rounded">
				
				<div class="col-lg-1-2 mt-1 border-right2 mx-auto text-left tablinks activee tab_title" onclick="openTabb(event, 'event_lead')">
                    <p class="text-blue align-middle  mt-2"><i class="fa-solid fa-school-flag ic_style4"></i> My School</p>
                </div>
                <div class="col-lg-1-2 mt-1 border-right2 mx-auto text-left tablinks tab_title" onclick="openTabb(event, 'event_lead')">
                    <p class="text-blue align-middle mt-2"><i class="fa-solid fa-user-graduate ic_style4"></i> My Students</p>
                </div>
                <div class="col-lg-1-2 text-left text-primary mt-1 border-right2 mx-auto tab_title tablinks" onclick="openTabb(event, 'leads_repo')">
                    <p class="text-blue align-middle mt-2"><i class="fa-solid fa-database ic_style4"></i> Universities</p>
                </div>
                <div class="col-lg-1-2 mt-1 border-right2 mx-auto text-left tab_title tablinks" onclick="openTabb(event, 'schools')">
                    <p class="text-blue align-middle mt-2"><i class="fa-solid fa-chart-column ic_style4"></i> Statistic</p>
                </div>
                <div class="col-lg-1-2 mt-1 border-right2 mx-auto text-left tab_title tablinks" onclick="openTabb(event, 'applicationss')">
                    <p class="text-blue align-middle mt-2"><i class="fa-solid fa-address-card ic_style4"></i> Applications</p>
                </div>
				<div class="col-lg-3 mt-1">
					<div class="container w-75 float-end">
						<select class="text-start btn btn-outline-primary2 mt-1  h-100 w-100" aria-label="">
							<a class="dropdown-item" href="#">
								<option> Currency $ USD</option>
							</a>
							<option> EURO</option>
							<option> PKR</option>
						</select>
					</div>
					<!--               
			<div class="dropdown float-end w-50">
				<button class="btn btn-outline-primary dropdown-toggle text-muted  p-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"> Currency $ USD </button>
				<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
					<li><a class="dropdown-item" href="#">EURO</a></li>
					<li><a class="dropdown-item" href="#">PKR</a></li>
				</ul>
			</div> --></div>
			</div>
		</div>
	</div>
	<!-- HEADER CLOSED -->