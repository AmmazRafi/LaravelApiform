@extends('students.main')

@section('content')
	<!-- MAIN START -->
    

    
    <!-- CONTAINER STAR -->
	<div class="container px-md-0">
		<div class="row" style="margin-left:0px !important;margin-right:0px !important;">
            <!-- Left Sidebar start -->
    <div class="col-lg-1-5">
        <div class="">
            <div class="card">
                <div class="card-body align-middle">
                    <p class="text-blue card-title txt h5"><i class="fa-solid fa-right-to-bracket ic_style2"></i> &nbsp;School Menu</p>
                    <hr>
                    <p class="text-blue card-text txt ">&nbsp;<i class="fa-solid fa-circle-info ic_style2"></i> &nbsp;School Basic Info</p>
                    <p class="text-blue card-text txt ">&nbsp;<i class="fa-solid fa-location-pin ic_style2"></i> &nbsp;School location</p>
                    <p class="text-blue card-text txt ">&nbsp;<i class="fa-solid fa-user-tie ic_style2"></i> &nbsp;School counselor</p>
                    <p class="text-blue card-text txt "><i class="fa fa-users ic_style2"></i> &nbsp;School students info</p>
                    <p class="text-blue card-text txt "><i class="fa fa-users ic_style2"></i> &nbsp;University Fair Registrations</p>
                    <p class="text-blue card-text txt "><i class="fa fa-users ic_style2"></i> &nbsp;Career Talk Registrations</p>
                </div>
            </div>
            
        </div>
    </div>
	<!-- Left Sidebar end -->
			<div class="col-lg-5-8">
				<div class="card">
					<div id="event_lead" class="tabcontent">
						<div class="card-body">
							<div class="w-100">
                                <div class="row">
                                    <div class="mt-2">
                                        <div class="h4 text-blue">School Basic Information</div>
                                      </div>
                                    </div>


                                 <form class="mt-3" action="{{ route('store') }}" method="POST" enctype="multipart/form-data"> 
                                    @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                    
                                        <select class="h-100 text-start form-control form-control2"   aria-label="">
											<a class="dropdown-item" href="#">
												<option name="studentschool"> Select student's school</option>
											</a>
											<option> EURO</option>
											<option> PKR</option>
										</select>
                                      </div>
                                    <div class="col-lg-6">
                                            
                                     <div class="h-100">
                                        <div class="input-group">
                                            <label for="inputPassword2" class="visually-hidden">Telephone</label>
                                            <input id="phone" name="phone" type="tel" class="form-control form-control2">
                                            
                                          </div>
                                          </div>

                                    </div>
                                    
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-6">
                                        <div class="h-100">
                                        <label for="inputPassword2" class="visually-hidden">Email</label>
                                        <input type="email" name="email" class="form-control form-control2" id="inputPassword2" placeholder="Email">
                                      </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="h-100">
                                      <label for="inputPassword2" class="visually-hidden">Facebook</label>
                                      <input type="text" name="facebook" class="form-control form-control2" id="inputPassword2" placeholder="Facebook">
                                    </div>
                                    </div>
                                    
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-6">
                                        <div class="h-100">
                                        <label for="inputPassword2" class="visually-hidden">Website</label>
                                        <input type="text" name="website" class="form-control form-control2" id="inputPassword2" placeholder="Website">
                                        </div>
                                      </div>
                                    <div class="col-lg-6">
                                        <div class="h-100">
                                      <label for="inputPassword2" class="visually-hidden">Linkedin</label>
                                      <input type="text" name="linkedin" class="form-control form-control2" id="inputPassword2" placeholder="Linkedin">
                                      </div>
                                    </div>
                                    
                                </div>


                                <div class="row mt-3">
                                    <div class="col-lg-12">
                                        <div class="text-center mt-5">
                                       <button class="btn btn-blue w-25 p-2">Save</button>
                                       
                                       <button class="btn btn-blue w-25 p-2">Save & Close</button>
                                       
                                       <button class="btn btn-danger w-25 p-2">Cancel</button>
                                       </div>
                                      </div>
                                  
                                    
                                </div>
                                </form>




							</div>
							
						</div>
						
					</div>
				
				</div>
			</div>
			<!-- CONTAINER CLOSED -->
			<!-- RIGHT SIDEBAR START -->
			<div class="col-lg-1-5">
				<div class="">
					<div class="card">
						<div class="card-body align-middle">
							<p class="card-title h5"><i class="fa fa-bell ic_style2"></i> &nbsp;Notifications</p>
							<hr>
							<p class="card-text"><i class="fa-solid fa-user-graduate ic_style2"></i> &nbsp;Registrations<span class="badge rounded-pill bg-danger align-right float-end">14</span></p>
							<p class="card-text"><i class="fa-solid fa-calendar ic_style2"></i> &nbsp;New Events<span class="badge rounded-pill bg-danger align-right float-end">15</span></p>
							<p class="card-text"><i class="fa fa-comment-dots ic_style2"></i> &nbsp;Students Chat<span class="badge rounded-pill bg-danger align-right float-end">7</span></p>
							<p class="card-text"><i class="fa fa-id-card ic_style2"></i> &nbsp;Application<span class="badge rounded-pill bg-danger align-right float-end">5</span></p>
						</div>
					</div>
					<div class="card mt-4">
						<div class="card-body align-middle">
							<p class="card-title h5"><i class="fa-solid fa-right-to-bracket ic_style2"></i> &nbsp;Join</p>
							<hr>
							<p class="card-text"><i class="fa-solid fa-door-open ic_style2"></i> &nbsp;University Fair</p>
							<p class="card-text"> <i class="fa-solid fa-person-chalkboard ic_style2"></i> &nbsp;Career talk</p>
						</div>
					</div>
					<div class="card mt-4">
						<div class="card-body align-middle">
							<p class="card-title h5"><i class="fa-solid fa-plus ic_style2"></i> &nbsp;Create</p>
							<hr>
							<p class="card-text"><i class="fa-solid fa-door-open ic_style2"></i> &nbsp;Open day</p>
							<p class="card-text"><i class="fa-solid fa-person-chalkboard ic_style2"></i> &nbsp;Workshop</p>
							<p class="card-text"><i class="fa-solid fa-building-columns ic_style2"></i>&nbsp;&nbsp;&nbsp;Student for a day</p>
							<p class="card-text"><i class="fa fa-users ic_style2"></i> &nbsp;Competition</p>
						</div>
					</div>
				</div>
			</div>
			<!-- RIGHT SIDEBAR CLOSED -->
		</div>
	</div>
	<!-- MAIN CLOSED -->
	<!-- BANNER START -->
	<div class="container px-md-0">
		<div class="row">
			<div class="col-2"></div>
			<div class="col-8 mx-auto text-center"> <img src="{{ asset('assets/banner.png') }}" class="w-100 mt-4"> </div>
			<div class="col-2"></div>
		</div>
	</div>
	<!-- BANNER CLOSED -->
	<!-- NEWSLETTER START -->
	<div class="container px-md-0 mx-auto text-center mt-5 p-4 ">
		<p class="h3 fw-bold mt-4">SUBSCRIBE TO OUR NEWSLETTER</p>
		<div class="input-group mx-auto  text-center w-50 mt-4 mb-5">
			<input type="email" class="form-control form-control2" placeholder="Your email address" aria-label="Recipient's username" aria-describedby="basic-addon2">
			<div class="input-group-append">
				<button class="btn btn-primary" type="button">Subscribe</button>
			</div>
		</div>
	</div>
	<!-- NEWSLETTER CLOSED -->

@endsection	