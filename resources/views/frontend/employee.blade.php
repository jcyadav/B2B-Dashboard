@extends('frontend.layouts.main')
@section('main.container')
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->	
			<div class="page-titles">
				<ol class="breadcrumb">
					{{-- <li><h5 class="bc-title">Employee</h5></li>
					<li class="breadcrumb-item"><a href="javascript:void(0)">
						<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
						Employee </a>
					</li> --}}
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Employee</a></li>
				</ol>
				<a class="text-primary fs-13" data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button" aria-controls="offcanvasExample1">+ Add Task</a>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body p-0">
								<div class="table-responsive active-projects style-1">
								<div class="tbl-caption">
									<h4 class="heading mb-0">Employees</h4>
									<div>
										<a class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">+ Add Employee</a>
										<button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal1">
												  + Invite Employee
												</button>
									</div>
								</div>
									<table id="empoloyees-tblwrapper" class="table">
										<thead>
											<tr>
												<th>Employee ID</th>
												<th>Employee Name</th>
												<th>Department</th>
												<th>Email Address</th>
												<th>Contact Number</th>
												<th>Gender</th>
												<th>Location</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><span>1001</span></td>
												<td>
													<div class="products">
														<img src="{{url('frontend/images/contacts/pic2.jpg')}}" class="avatar avatar-md" alt="">
														<div>
															<h6>Liam Antony</h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><span>Computer Science</span></td>
												<td><span class="text-primary">abc@gmail.com</span></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td>
													<span>Delhi</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td><span>1001</span></td>
												<td>
													<div class="products">
														<img src="{{url('frontend/images/contacts/pic1.jpg')}}" class="avatar avatar-md" alt="">
														<div>
															<h6>Noah Oliver</h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><span>Computer Science</span></td>
												<td><span class="text-primary">abc@gmail.com</span></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td>
													<span>Delhi</span>
												</td>
												<td>
													<span class="badge badge-danger light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td><span>1001</span></td>
												<td>
													<div class="products">
														<img src="{{url('frontend/images/contacts/pic3.jpg')}}" class="avatar avatar-md" alt="">
														<div>
															<h6>Elijah James</h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><span>Computer Science</span></td>
												<td><span class="text-primary">abc@gmail.com</span></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td>
													<span>Delhi</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td><span>1001</span></td>
												<td>
													<div class="products">
														<img src="{{url('frontend/images/contacts/pic3.jpg')}}" class="avatar avatar-md" alt="">
														<div>
															<h6>James Antony</h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><span>Computer Science</span></td>
												<td><span class="text-primary">abc@gmail.com</span></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td>
													<span>Delhi</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td><span>1001</span></td>
												<td>
													<div class="products">
														<img src="{{url('frontend/images/contacts/pic1.jpg')}}" class="avatar avatar-md" alt="">
														<div>
															<h6>William Sokli</h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><span>Computer Science</span></td>
												<td><span class="text-primary">abc@gmail.com</span></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td>
													<span>Delhi</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td><span>1001</span></td>
												<td>
													<div class="products">
														<img src="{{url('frontend/images/contacts/pic2.jpg')}}" class="avatar avatar-md" alt="">
														<div>
															<h6>William Sokli</h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><span>Computer Science</span></td>
												<td><span class="text-primary">abc@gmail.com</span></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td>
													<span>Delhi</span>
												</td>
												<td>
													<span class="badge badge-danger light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td><span>1001</span></td>
												<td>
													<div class="products">
														<img src="{{url('frontend/images/contacts/pic2.jpg')}}" class="avatar avatar-md" alt="">
														<div>
															<h6>Benjamin Chaa</h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><span>Computer Science</span></td>
												<td><span class="text-primary">abc@gmail.com</span></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td>
													<span>Delhi</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td><span>1001</span></td>
												<td>
													<div class="products">
														<img src="{{url('frontend/images/contacts/pic1.jpg')}}" class="avatar avatar-md" alt="">
														<div>
															<h6>William Sokli</h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><span>Computer Science</span></td>
												<td><span class="text-primary">abc@gmail.com</span></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td>
													<span>Delhi</span>
												</td>
												<td>
													<span class="badge badge-danger light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td><span>1001</span></td>
												<td>
													<div class="products">
														<img src="{{url('frontend/images/contacts/pic3.jpg')}}" class="avatar avatar-md" alt="">
														<div>
															<h6>Ricky Antony</h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><span>Computer Science</span></td>
												<td><span class="text-primary">abc@gmail.com</span></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td>
													<span>Delhi</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td><span>1001</span></td>
												<td>
													<div class="products">
														<img src="{{url('frontend/images/contacts/pic3.jpg')}}" class="avatar avatar-md" alt="">
														<div>
															<h6>William Sokli</h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><span>Computer Science</span></td>
												<td><span class="text-primary">abc@gmail.com</span></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td>
													<span>Delhi</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td><span>1001</span></td>
												<td>
													<div class="products">
														<img src="{{url('frontend/images/contacts/pic1.jpg')}}" class="avatar avatar-md" alt="">
														<div>
															<h6>Ricky Antony</h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><span>Computer Science</span></td>
												<td><span class="text-primary">abc@gmail.com</span></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td>
													<span>Delhi</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td><span>1001</span></td>
												<td>
													<div class="products">
														<img src="{{url('frontend/images/contacts/pic2.jpg')}}" class="avatar avatar-md" alt="">
														<div>
															<h6>William Sokli</h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><span>Computer Science</span></td>
												<td><span class="text-primary">abc@gmail.com</span></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td>
													<span>Delhi</span>
												</td>
												<td>
													<span class="badge badge-danger light border-0">Active</span>
												</td>
											</tr>
											
										</tbody>
										
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			
			</div>
        </div>
		
        <!--**********************************
            Content body end
        ***********************************-->
		@endsection
		
		
       