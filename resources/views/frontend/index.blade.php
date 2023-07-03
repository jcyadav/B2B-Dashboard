@extends('frontend.layouts.main')
	  @section('main.container')
		  
	  
		<!--**********************************
		Main wrapper start
		***********************************-->
		<div id="main-wrapper">

		<!--**********************************
		Content body start
		***********************************-->
		<div class="content-body">
		<!-- row -->	
		<div class="page-titles">
		<ol class="breadcrumb">
		<li><h5 class="bc-title">Dashboard</h5></li>
		<li class="breadcrumb-item"><a href="javascript:void(0)">
		<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
		<path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
		</svg>
		Home </a>
		</li>
		<!-- <li class="breadcrumb-item active"><a href="javascript:void(0)">Dashboard</a></li> -->
		</ol>
		<a class="text-primary fs-13" data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button" aria-controls="offcanvasExample1">+ Add Task</a>
		</div>
		<div class="container-fluid">
		<div class="row">
		<div class="col-xl-9 wid-100">
		<div class="row">
		<div class="col-xl-3 col-sm-6">
		<div class="card chart-grd same-card">
		<div class="card-body depostit-card p-0">
		<div class="depostit-card-media d-flex justify-content-between pb-0">
		<table class="table">
		<thead>
		<tr>
		<!-- <th scope="col">#</th> -->
		<th scope="col">Total Volume (MTD)</th>
		<th scope="col"></th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<!-- <th scope="row">1</th> -->
		<td>3.18 Cr</td>
		<td>0.23</td>
		</tr>
		<tr>
		<!-- <th scope="row">2</th> -->
		<td>2.58 Cr</td>
		<td>LMTD</td>
		</tr>
		</tbody>
		</table>
		</div>
		<!-- <div id="NewCustomers"></div> -->
		</div>
		</div>
		</div>
		<div class="col-xl-3 col-sm-6">
		<div class="card same-card">
		<div class="card-body d-flex align-items-center  py-2">

		<table class="table">
		<thead>
		<tr>
		<!-- <th scope="col">#</th> -->
		<th scope="col">Total Transaction (MTD)</th>
		<!-- <th scope="col"></th> -->
		</tr>
		</thead>
		<tbody>
		<tr>
		<!-- <th scope="row">1</th> -->
		<td>3127</td>
		<td>12%</td>
		</tr>
		<tr>
		<!-- <th scope="row">2</th> -->
		<td>1802</td>
		<td>LMT</td>
		</tr>
		</tbody>
		</table>
		</div>
		</div>
		</div>
		<div class="col-xl-3 col-sm-6">
		<div class="card chart-grd same-card">
		<div class="card-body depostit-card p-0">
		<div class="depostit-card-media">

		<table class="table">
		<thead>
		<tr>
		<!-- <th scope="col">#</th> -->
		<th scope="col">Total Volume (Today)</th>
		<!-- <th scope="col"></th> -->
		</tr>
		</thead>
		<tbody>
		<tr>
		<!-- <th scope="row">1</th> -->
		<td>4.47 Lac</td>
		<td style="color:red;">-92%</td>
		</tr>
		<tr>
		<!-- <th scope="row">2</th> -->
		<td>55.43 Lac</td>
		<td>LWSD</td>
		</tr>
		</tbody>
		</table>
		</div>

		</div>
		</div>
		</div>
		<div class="col-xl-3 col-sm-6 same-card">
		<div class="card">
		<div class="card-body depostit-card">
		<div class="depostit-card-media d-flex justify-content-between style-1">
			<table class="table">
				<thead>
				<tr>
				<th scope="col">Total Transaction (Today)</th>
				<!-- <th scope="col"></th> -->
				</tr>
				</thead>
				<tbody>
				<tr>
				<!-- <th scope="row">1</th> -->
				<td>60</td>
				<td>50%</td>
				</tr>
				<tr>
				<!-- <th scope="row">2</th> -->
				<td>66.87 Lac</td>
				<td>LWSD</td>
				</tr>
				</tbody>
				</table>
		</div>
		
		</div>
		</div>
		</div>
		<div class="col-xl-6 col-sm-12 same-card">
			<div class="card">
			<div class="card-body depostit-card">
			<div class="depostit-card-media d-flex justify-content-between style-1">
				<table class="table">
					<thead>
					<tr>
					<th scope="col">Total Merchant  Onboarded</th>
					<th scope="col"></th>
                    <th scope="col">Active</th>
					<th scope="col">Inactive</th>
					<!-- <th scope="col"></th> -->
					</tr>
					</thead>
					<tbody>
					<tr>
					<td>55</td>
					<td>-40%</td>
					<td>6000</td>
					<td>2000</td>
					</tr>
					<tr>
					<td>125</td>
					<td>LMTD</td>
					</tr>
					</tbody>
					</table>
			</div>
			
			</div>
			</div>
			</div>
			<div class="col-xl-3 col-sm-6">
				<div class="card same-card">
				<div class="card-body d-flex align-items-center  py-2">
		
				<table class="table">
				<thead>
				<tr>
				<!-- <th scope="col">#</th> -->
				<th scope="col">Date</th>
				<th scope="col"></th>
				<th scope="col">Month</th>
				</tr>
				</thead>
				<tbody>
				<tr>
				<!-- <th scope="row">1</th> -->
				<th class="col">Start Date</th>
				<th class="col">End Date</th>
				<th class="col">October</th>
				</tr>
				<tr>
				<!-- <th scope="row">2</th> -->
				<td>10/01/2023</td>
				<td>31/10/2023</td>
				<td>2023</td>
				</tr>
				</tbody>
				</table>
				</div>
				</div>
				</div>
				<div class="col-xl-3 col-sm-6">
					<div class="card same-card">
					<div class="card-body d-flex align-items-center  py-2">
			
					<table class="table">
					<thead>
					<tr>
					<!-- <th scope="col">#</th> -->
					<th scope="col">Product Wise Net Profit</th>
					<!-- <th scope="col"></th> -->
					</tr>
					</thead>
					<tbody>
					<tr>
					<!-- <th scope="row">1</th> -->
					<td>Net-Profit</td>
					<td>380</td>
					</tr>
					</tbody>
					</table>
					</div>
					</div>
					</div>
		<div class="col-xl-6 active-p">
		<div class="card">
		<div class="card-body p-0">
		<div class="table-responsive active-projects shorting">
		<div class="tbl-caption">
		<h4 class="heading mb-0">Business Trend	</h4>
		</div>
		<table id="projects-tbl" class="table ItemsCheckboxSec">
		<thead>
		<tr>
		<th>
		<div class="form-check custom-checkbox ms-0">
		<input type="checkbox" class="form-check-input checkAllInput" required="">
		<label class="form-check-label" for="checkAll"></label>
		</div>
		</th>
		<th>Product Wise Volume Share (MTD)</th>
		<th>Today</th>
		<th>Past 7 Days</th>
		<th>Past 30 Days</th>
		<th>Past 3 Month</th>
		<th>Past 1 Year</th>
		</tr>
		</thead>
		<tbody>

		<tr>
		<td>
		<div class="form-check custom-checkbox">
		<input type="checkbox" class="form-check-input" id="customCheckBox11" required="">
		<label class="form-check-label" for="customCheckBox11"></label>
		</div>
		</td>
		<td>Recharge</td>
		<td>
		<div class="d-flex align-items-center">
		<!-- <img src="images/contacts/pic1.jpg" class="avatar rounded-circle" alt=""> -->
		<p class="mb-0 ms-2">100</p>	
		</div>
		</td>
		<td class="pe-0">
		<div class="tbl-progress-box">
		<div class="progress">
		<div class="progress-bar bg-primary" style="width:53%; height:5px; border-radius:4px;" role="progressbar"></div>
		</div>
		<span class="text-primary">53%</span>
		</div>
		</td>
		<td class="pe-0">
		<!-- <div class="avatar-list avatar-list-stacked">
		<img src="images/contacts/pic1.jpg" class="avatar rounded-circle" alt="">
		<img src="images/contacts/pic555.jpg" class="avatar rounded-circle" alt="">
		<img src="images/contacts/pic999.jpg" class="avatar rounded-circle" alt="">
		</div> -->
		<p class="mb-0 ms-2">200</p>	
		</td>
		<td class="pe-0">
		<span class="badge badge-primary light border-0">Inprogress</span>
		</td>
		<td>
		<span>299</span>
		</td>
		</tr>

		</tbody>

		</table>
		</div>
		</div>
		</div>
		</div>
		<div class="col-xl-6 active-p">
			<div class="card">
			<div class="card-body p-0">
			<div class="table-responsive active-projects shorting">
			<div class="tbl-caption">
			<h4 class="heading mb-0 text-center">Royal Pe</h4>
			</div>
			<table id="projects-tbl" class="table ItemsCheckboxSec">
			<thead>	
			<th>
			<div class="form-check custom-checkbox ms-0">
			<input type="checkbox" class="form-check-input checkAllInput" required="">
			<label class="form-check-label" for="checkAll"></label>
			</div>
			</th>
			<th>Business Analysis</th>
			<th>TXN Count</th>
			<th>Valume</th>
			<th>Comm.</th>
			</tr>
			</thead>
			<tbody>
	
			<tr>
			<td>
			<div class="form-check custom-checkbox">
			<input type="checkbox" class="form-check-input" id="customCheckBox11" required="">
			<label class="form-check-label" for="customCheckBox11"></label>
			</div>
			</td>
			<td>Aadhar Pay</td>
			<td>
			<div class="d-flex align-items-center">
			<p class="mb-0 ms-2">173</p>	
			</div>
			</td>
			<td class="pe-0">
			<div class="tbl-progress-box">
			<div class="progress">
			<div class="progress-bar bg-primary" style="width:53%; height:5px; border-radius:4px;" role="progressbar"></div>
			</div>
			<span class="text-primary">528,100</span>
			</div>
			</td>
			<td class="pe-0">
				<div class="tbl-progress-box">
				<div class="progress">
				<div class="progress-bar bg-primary" style="width:53%; height:5px; border-radius:4px;" role="progressbar"></div>
				</div>
				<span class="text-primary">100</span>
				</div>
				</td>
			</tr>
	
			</tbody>
	
			</table>
			
			</div>
			</div>
			</div>
			</div>
			<div class="col-xl-6 active-p">
				<div class="card">
				<div class="card-body p-0">
				<div class="table-responsive active-projects shorting">
				<div class="tbl-caption">
				<h4 class="heading mb-0 text-center"> Paysprint</h4>
				</div>
				<table id="projects-tbl" class="table ItemsCheckboxSec">
				<thead>	
				<th>
				<div class="form-check custom-checkbox ms-0">
				<input type="checkbox" class="form-check-input checkAllInput" required="">
				<label class="form-check-label" for="checkAll"></label>
				</div>
				</th>
				<th>Business Analysis</th>
				<th>TXN Count</th>
				<th>Valume</th>
				<th>Earned Comm.</th>
				<th>Net-Profit</th>
				<th>%</th>
				</tr>
				</thead>
				<tbody>
		
				<tr>
				<td>
				<div class="form-check custom-checkbox">
				<input type="checkbox" class="form-check-input" id="customCheckBox11" required="">
				<label class="form-check-label" for="customCheckBox11"></label>
				</div>
				</td>
				<td>Aadhar Pay</td>
				<td>
				<div class="d-flex align-items-center">
				<p class="mb-0 ms-2">173</p>	
				</div>
				</td>
				<td class="pe-0">
				<div class="tbl-progress-box">
				<div class="progress">
				<div class="progress-bar bg-primary" style="width:53%; height:5px; border-radius:4px;" role="progressbar"></div>
				</div>
				<span class="text-primary">528,100</span>
				</div>
				</td>
				<td class="pe-0">
					<div class="tbl-progress-box">
					<div class="progress">
					<div class="progress-bar bg-primary" style="width:53%; height:5px; border-radius:4px;" role="progressbar"></div>
					</div>
					<span class="text-primary">1,306</span>
					</div>
					</td>
					<td>380</td>
					<td>41%</td>
				</tr>
		
				</tbody>
		
				</table>
				
				</div>
				</div>
				</div>
				</div>
		</div>
		</div>
		
		<div class="col-xl-3 col-md-6 up-shd">
		<div class="card">
		<div class="card-header pb-0 border-0">
		<h4 class="heading mb-0">Transaction Status</h4>
		<select class="default-select status-select normal-select">
		<option value="Today">Today</option>
		<option value="Week">Week</option>
		<option value="Month">Month</option>
		</select>
		</div>
		<div class="card-body">
		<div id="projectChart" class="project-chart"></div>
		<div class="project-date">
		<div class="project-media">
		<p class="mb-0">
		<svg class="me-2" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
		<rect y="0.5" width="12" height="12" rx="3" fill="var(--primary)"/>
		</svg>
		Completed Transaction
		</p>
		<span>125 Transaction</span>
		</div>	
		<div class="project-media">
		<p class="mb-0">
		<svg class="me-2" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
		<rect y="0.5" width="12" height="12" rx="3" fill="#3AC977"/>
		</svg>
		Progress Transaction
		</p>
		<span>125 Transaction</span>
		</div>
		<div class="project-media">
		<p class="mb-0">
		<svg class="me-2" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
		<rect y="0.5" width="12" height="12" rx="3" fill="#FF5E5E"/>
		</svg>
		Cancelled
		</p>
		<span>125 Transaction</span>
		</div>
		<div class="project-media">
		<p class="mb-0">
		<svg class="me-2" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
		<rect y="0.5" width="12" height="12" rx="3" fill="#FF9F00"/>
		</svg>
		Yet to Start 
		</p>
		<span>125 Transaction</span>
		</div>
		</div>
		</div>
		</div>
		</div>
		<div class="col-xl-9 bst-seller">
		<div class="card">
		<div class="card-body p-0">
		<div class="table-responsive active-projects style-1 ItemsCheckboxSec shorting ">
		<div class="tbl-caption">
		<h4 class="heading mb-0">Employees</h4>
		<div>
		<a class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">+ Add Employee</a>
		<button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal1">+ Invite Employee
		</button>
		</div>
		</div>
		<table id="empoloyees-tbl" class="table">
		<thead>
		<tr>
		<th>
		<div class="form-check custom-checkbox ms-0">
		<input type="checkbox" class="form-check-input checkAllInput" id="checkAll2" required="">
		<label class="form-check-label" for="checkAll2"></label>
		</div>
		</th>
		<th>Employee ID</th>
		<th>Employee Name</th>
		<th>Email Address</th>
		<th>Contact Number</th>
		<th>Gender</th>
		<th>Location</th>
		<th>Status</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>
		<div class="form-check custom-checkbox">
		<input type="checkbox" class="form-check-input" id="customCheckBox100" required="">
		<label class="form-check-label" for="customCheckBox100"></label>
		</div>
		</td>
		<td><span>1001</span></td>
		<td>
		<div class="products">
		<img src="{{url('frontend/images/contacts/pic1.jpg')}}" class="avatar avatar-md" alt="">
		<div>
		<h6><a href="javascript:void(0)">Ricky Antony</a></h6>
		<span>Web Designer</span>	
		</div>	
		</div>
		</td>
		<td><a href="javascript:void(0)" class="text-primary">ra@gmail.com</a></td>
		<td>
		<span>+12 123 456 7890</span>
		</td>
		<td>
		<span>Male</span>
		</td>	
		<td>
		<span>AZ</span>
		</td>
		<td>
		<span class="badge badge-success light border-0">Active</span>
		</td>
		</tr>
		<tr>
		<td>
		<div class="form-check custom-checkbox">
		<input type="checkbox" class="form-check-input" id="customCheckBox100" required="">
		<label class="form-check-label" for="customCheckBox100"></label>
		</div>
		</td>
		<td><span>1018</span></td>
		<td>
		<div class="products">
		<img src="{{url('frontend/images/contacts/pic2.jpg')}}" class="avatar avatar-md" alt="">
		<div>
		<h6><a href="javascript:void(0)">Ricky Antony</a></h6>
		<span>Web Designer</span>	
		</div>	
		</div>
		</td>
		<td><a href="javascript:void(0)" class="text-primary">abc@gmail.com</a></td>
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
		<td>
		<div class="form-check custom-checkbox">
		<input type="checkbox" class="form-check-input" id="customCheckBox151" required="">
		<label class="form-check-label" for="customCheckBox151"></label>
		</div>
		</td>
		<td><span>1018</span></td>
		<td>
		<div class="products">
		<img src="{{url('frontend/images/contacts/pic3.jpg')}}" class="avatar avatar-md" alt="">
		<div>
		<h6><a href="javascript:void(0)">Ricky M</a></h6>
		<span>Software Designer</span>	
		</div>	
		</div>
		</td>
		<td><a href="javascript:void(0)" class="text-primary">rm@gmail.com</a></td>
		<td>
		<span>+55 123 456 7890</span>
		</td>
		<td>
		<span>Male</span>
		</td>	
		<td>
		<span>PA</span>
		</td>
		<td>
		<span class="badge badge-success light border-0">Active</span>
		</td>
		</tr>
		<tr>
		<td>
		<div class="form-check custom-checkbox">
		<input type="checkbox" class="form-check-input" id="customCheckBox100" required="">
		<label class="form-check-label" for="customCheckBox100"></label>
		</div>
		</td>
		<td><span>1018</span></td>
		<td>
		<div class="products">
		<img src="{{url('frontend/images/contacts/pic1.jpg')}}" class="avatar avatar-md" alt="">
		<div>
		<h6><a href="javascript:void(0)">Ricky Antony</a></h6>
		<span>Software Designer</span>	
		</div>	
		</div>
		</td>
		<td><a href="javascript:void(0)" class="text-primary">abc@gmail.com</a></td>
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
		<td>
		<div class="form-check custom-checkbox">
		<input type="checkbox" class="form-check-input" id="customCheckBox100" required="">
		<label class="form-check-label" for="customCheckBox100"></label>
		</div>
		</td>
		<td><span>1018</span></td>
		<td>
		<div class="products">
		<img src="{{url('frontend/images/contacts/pic2.jpg')}}" class="avatar avatar-md" alt="">
		<div>
		<h6><a href="javascript:void(0)">Honey Risher</a></h6>
		<span>Software Designer</span>	
		</div>	
		</div>
		</td>
		<td><a href="javascript:void(0)" class="text-primary">hr@gmail.com</a></td>
		<td>
		<span>+22 123 456 7890</span>
		</td>
		<td>
		<span>Female</span>
		</td>	
		<td>
		<span>WA</span>
		</td>
		<td>
		<span class="badge badge-success light border-0">Active</span>
		</td>
		</tr>
		<tr>
		<td>
		<div class="form-check custom-checkbox">
		<input type="checkbox" class="form-check-input" id="customCheckBox100" required="">
		<label class="form-check-label" for="customCheckBox100"></label>
		</div>
		</td>
		<td><span>1018</span></td>
		<td>
		<div class="products">
		<img src="images/contacts/pic2.jpg" class="avatar avatar-md" alt="">
		<div>
		<h6><a href="javascript:void(0)">Mony Antony</a></h6>
		<span>Web Designer</span>	
		</div>	
		</div>
		</td>
		<td><a href="javascript:void(0)" class="text-primary">ma@gmail.com</a></td>
		<td>
		<span>+62 123 456 7890</span>
		</td>
		<td>
		<span>Female</span>
		</td>	
		<td>
		<span>WA</span>
		</td>
		<td>
		<span class="badge badge-success light border-0">Active</span>
		</td>
		</tr>
		<tr>
		<td>
		<div class="form-check custom-checkbox">
		<input type="checkbox" class="form-check-input" id="customCheckBox1111" required="">
		<label class="form-check-label" for="customCheckBox1111"></label>
		</div>
		</td>
		<td><span>1018</span></td>
		<td>
		<div class="products">
		<img src="{{url('frontend/images/contacts/pic1.jpg')}}" class="avatar avatar-md" alt="">
		<div>
		<h6><a href="javascript:void(0)">Ankites Risher</a></h6>
		<span>Web Designer</span>	
		</div>	
		</div>
		</td>
		<td><a href="javascript:void(0)" class="text-primary">ar@gmail.com</a></td>
		<td>
		<span>+62 123 456 7890</span>
		</td>
		<td>
		<span>Female</span>
		</td>	
		<td>
		<span>AL</span>
		</td>
		<td>
		<span class="badge badge-success light border-0">Active</span>
		</td>
		</tr>
		<tr>
		<td>
		<div class="form-check custom-checkbox">
		<input type="checkbox" class="form-check-input" id="customCheckBox1111" required="">
		<label class="form-check-label" for="customCheckBox1111"></label>
		</div>
		</td>
		<td><span>1018</span></td>
		<td>
		<div class="products">
		<img src="images/contacts/pic2.jpg" class="avatar avatar-md" alt="">
		<div>
		<h6><a href="javascript:void(0)">Elijah James</a></h6>
		<span>Software Developer</span>	
		</div>	
		</div>
		</td>
		<td><a href="javascript:void(0)" class="text-primary">ar@gmail.com</a></td>
		<td>
		<span>+85 123 456 7890</span>
		</td>
		<td>
		<span>Female</span>
		</td>	
		<td>
		<span>AL</span>
		</td>
		<td>
		<span class="badge badge-success light border-0">Active</span>
		</td>
		</tr>
		<tr>
		<td>
		<div class="form-check custom-checkbox">
		<input type="checkbox" class="form-check-input" id="customCheckBox1122" required="">
		<label class="form-check-label" for="customCheckBox1122"></label>
		</div>
		</td>
		<td><span>1018</span></td>
		<td>
		<div class="products">
		<img src="{{url('frontend/images/contacts/pic3.jpg')}}" class="avatar avatar-md" alt="">
		<div>
		<h6><a href="javascript:void(0)">Elijah James</a></h6>
		<span>Software Developer</span>	
		</div>	
		</div>
		</td>
		<td><a href="javascript:void(0)" class="text-primary">ej@gmail.com</a></td>
		<td>
		<span>+69 123 456 7890</span>
		</td>
		<td>
		<span>Male</span>
		</td>	
		<td>
		<span>AL</span>
		</td>
		<td>
		<span class="badge badge-success light border-0">Active</span>
		</td>
		</tr>
		<tr>
		<td>
		<div class="form-check custom-checkbox">
		<input type="checkbox" class="form-check-input" id="customCheckBox100" required="">
		<label class="form-check-label" for="customCheckBox100"></label>
		</div>
		</td>
		<td><span>1018</span></td>
		<td>
		<div class="products">
		<img src="{{url('frontend/images/contacts/pic3.jpg')}}" class="avatar avatar-md" alt="">
		<div>
		<h6><a href="javascript:void(0)">Tony Antony</a></h6>
		<span>Web Designer</span>	
		</div>	
		</div>
		</td>
		<td><a href="javascript:void(0)" class="text-primary">ta@gmail.com</a></td>
		<td>
		<span>+78 123 456 7890</span>
		</td>
		<td>
		<span>Female</span>
		</td>	
		<td>
		<span>NYC</span>
		</td>
		<td>
		<span class="badge badge-success light border-0">Active</span>
		</td>
		</tr>
		<tr>
		<td>
		<div class="form-check custom-checkbox">
		<input type="checkbox" class="form-check-input" id="customCheckBox101" required="">
		<label class="form-check-label" for="customCheckBox101"></label>
		</div>
		</td>
		<td><span>1001</span></td>
		<td>
		<div class="products">
		<img src="{{url('frontend/images/contacts/pic1.jpg')}}" class="avatar avatar-md" alt="">
		<div>
		<h6><a href="javascript:void(0)">Ricky Antony</a></h6>
		<span>Web Designer</span>	
		</div>	
		</div>
		</td>
		<td><a href="javascript:void(0)" class="text-primary">abc@gmail.com</a></td>
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
		<span class="badge badge-danger light border-0">Pending</span>
		</td>
		</tr>
		<tr>
		<td>
		<div class="form-check custom-checkbox">
		<input type="checkbox" class="form-check-input" id="customCheckBox102" required="">
		<label class="form-check-label" for="customCheckBox102"></label>
		</div>
		</td>
		<td><span>1001</span></td>
		<td>
		<div class="products">
		<img src="{{url('frontend/images/contacts/pic3.jpg')}}" class="avatar avatar-md" alt="">
		<div>
		<h6><a href="javascript:void(0)">Ricky Antony</a></h6>
		<span>Web Designer</span>	
		</div>	
		</div>
		</td>
		<td><a href="javascript:void(0)" class="text-primary">abc@gmail.com</a></td>
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
		<td>
		<div class="form-check custom-checkbox">
		<input type="checkbox" class="form-check-input" id="customCheckBox1055" required="">
		<label class="form-check-label" for="customCheckBox1055"></label>
		</div>
		</td>
		<td><span>1001</span></td>
		<td>
		<div class="products">
		<img src="{{url('frontend/images/contacts/pic1.jpg')}}" class="avatar avatar-md" alt="">
		<div>
		<h6><a href="javascript:void(0)">Ricky Antony</a></h6>
		<span>Web Designer</span>	
		</div>	
		</div>
		</td>
		<td><a href="javascript:void(0)" class="text-primary">abc@gmail.com</a></td>
		<td>
		<span>+255 123 456 7890</span>
		</td>
		<td>
		<span>Male</span>
		</td>	
		<td>
		<span>USA</span>
		</td>
		<td>
		<span class="badge badge-danger light border-0">Pending</span>
		</td>
		</tr>
		<tr>
		<td>
		<div class="form-check custom-checkbox">
		<input type="checkbox" class="form-check-input" id="customCheckBox103" required="">
		<label class="form-check-label" for="customCheckBox103"></label>
		</div>
		</td>
		<td><span>1001</span></td>
		<td>
		<div class="products">
		<img src="{{url('frontend/images/contacts/pic3.jpg')}}" class="avatar avatar-md" alt="">
		<div>
		<h6><a href="javascript:void(0)">Ricky Antony</a></h6>
		<span>Web Designer</span>	
		</div>	
		</div>
		</td>
		<td><a href="javascript:void(0)" class="text-primary">abc@gmail.com</a></td>
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
		<td>
		<div class="form-check custom-checkbox">
		<input type="checkbox" class="form-check-input" id="customCheckBox104" required="">
		<label class="form-check-label" for="customCheckBox104"></label>
		</div>
		</td>
		<td><span>1001</span></td>
		<td>
		<div class="products">
		<img src="{{url('frontend/images/contacts/pic2.jpg')}}" class="avatar avatar-md" alt="">
		<div>
		<h6><a href="javascript:void(0)">Ricky Antony</a></h6>
		<span>Web Designer</span>	
		</div>	
		</div>
		</td>
		<td><a href="javascript:void(0)" class="text-primary">abc@gmail.com</a></td>
		<td>
		<span>+91 123 456 7890</span>
		</td>
		<td>
		<span>Male</span>
		</td>	
		<td>
		<span>USA</span>
		</td>
		<td>
		<span class="badge badge-danger light border-0">Pending</span>
		</td>
		</tr>
		</tbody>

		</table>
		</div>
		</div>
		</div>
		</div>
		<div class="col-xl-8">
			<div class="card overflow-hidden">
			<div class="card-header border-0 pb-0 flex-wrap">
			<h4 class="heading mb-0">Projects Overview</h4>
			<ul class="nav nav-pills mix-chart-tab" id="pills-tab" role="tablist">
			<li class="nav-item" role="presentation">
			<button class="nav-link active" data-series="week" id="pills-week-tab" data-bs-toggle="pill" data-bs-target="#pills-week" type="button" role="tab"  aria-selected="true">Week</button>
			</li>
			<li class="nav-item" role="presentation">
			<button class="nav-link" data-series="month" id="pills-month-tab" data-bs-toggle="pill" data-bs-target="#pills-month" type="button" role="tab"  aria-selected="false">Month</button>
			</li>
			<li class="nav-item" role="presentation">
			<button class="nav-link" data-series="year" id="pills-year-tab" data-bs-toggle="pill" data-bs-target="#pills-year" type="button" role="tab"  aria-selected="false">Year</button>
			</li>
			<li class="nav-item" role="presentation">
			<button class="nav-link" data-series="all" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-selected="false">All</button>
			</li>
			</ul>
			</div>
			<div class="card-body  p-0">
			<div id="overiewChart"></div>
			<div class="ttl-project">
			<div class="pr-data">
			<h5>12,721</h5>
			<span>Number of Projects</span>
			</div>
			<div class="pr-data">
			<h5 class="text-primary">721</h5>
			<span>Active Projects</span>
			</div>
			<div class="pr-data">
			<h5>$2,50,523</h5>
			<span>Revenue</span>
			</div>
			<div class="pr-data">
			<h5 class="text-success">12,275h</h5>
			<span>Working Hours</span>
			</div>
			</div>
			</div>
			</div>
			</div>
			<div class="col-xl-4">
			<div class="card">
			<div class="card-header border-0">
			<h4 class="heading mb-0">My To Do Items</h4>
			<div>
			<a href="javascript:void(0);" class="text-primary me-2">View All</a>
			<a href="javascript:void(0);" class="text-black"> + Add To Do</a>
			</div>
			</div>
			<div class="card-body p-0">
			<div class="dt-do-bx">
			<div class="draggable-zone dropzoneContainer to-dodroup dz-scroll">
			<div class="sub-card draggable-handle draggable">
			<div class="d-items">
			<span class="text-warning dang d-block mb-2">
			<svg class="me-1" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" clip-rule="evenodd" d="M3.61051 15.3276H14.3978C15.5843 15.3276 16.329 14.0451 15.7395 13.0146L10.35 3.59085C9.75676 2.5536 8.26126 2.55285 7.66726 3.5901L2.26876 13.0139C1.67926 14.0444 2.42326 15.3276 3.61051 15.3276Z" stroke="#FF9F00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
			<path d="M9.00189 10.0611V7.7361" stroke="#FF9F00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
			<path d="M8.99625 12.375H9.00375" stroke="#FF9F00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>
			Latest to do's
			</span>
			<div class="d-flex justify-content-between flex-wrap">
			<div class="d-items-2">
			<div>
			<svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
			<rect width="1" height="1" fill="#888888"/>
			<rect y="3" width="1" height="1" fill="#888888"/>
			<rect y="6" width="1" height="1" fill="#888888"/>
			<rect y="9" width="1" height="1" fill="#888888"/>
			<rect y="12" width="1" height="1" fill="#888888"/>
			<rect y="15" width="1" height="1" fill="#888888"/>
			<rect x="4" width="1" height="1" fill="#888888"/>
			<rect x="4" y="3" width="1" height="1" fill="#888888"/>
			<rect x="4" y="6" width="1" height="1" fill="#888888"/>
			<rect x="4" y="9" width="1" height="1" fill="#888888"/>
			<rect x="4" y="12" width="1" height="1" fill="#888888"/>
			<rect x="4" y="15" width="1" height="1" fill="#888888"/>
			<rect x="8" width="1" height="1" fill="#888888"/>
			<rect x="8" y="3" width="1" height="1" fill="#888888"/>
			<rect x="8" y="6" width="1" height="1" fill="#888888"/>
			<rect x="8" y="9" width="1" height="1" fill="#888888"/>
			<rect x="8" y="12" width="1" height="1" fill="#888888"/>
			<rect x="8" y="15" width="1" height="1" fill="#888888"/>
			</svg>
			</div>
			<div>
			<div class="form-check custom-checkbox">
			<input type="checkbox" class="form-check-input" id="customCheckBox1" required>
			<label class="form-check-label" for="customCheckBox1">Compete this projects Monday</label>
			</div>
			<span>2023-12-26 07:15:00</span>
			</div>
			</div>
			<div>
			<div class="icon-box icon-box-md bg-danger-light me-1">
			<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M12.8833 6.31213C12.8833 6.31213 12.5213 10.8021 12.3113 12.6935C12.2113 13.5968 11.6533 14.1261 10.7393 14.1428C8.99994 14.1741 7.25861 14.1761 5.51994 14.1395C4.64061 14.1215 4.09194 13.5855 3.99394 12.6981C3.78261 10.7901 3.42261 6.31213 3.42261 6.31213" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round"/>
			<path d="M13.8055 4.1598H2.50012" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round"/>
			<path d="M11.6271 4.1598C11.1037 4.1598 10.6531 3.7898 10.5504 3.27713L10.3884 2.46647C10.2884 2.09247 9.94974 1.8338 9.56374 1.8338H6.74174C6.35574 1.8338 6.01707 2.09247 5.91707 2.46647L5.75507 3.27713C5.65241 3.7898 5.20174 4.1598 4.67841 4.1598" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>
			</div>
			<div class="icon-box icon-box-md bg-primary-light">
			<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M9.16492 13.6286H14" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round"/>
			<path fill-rule="evenodd" clip-rule="evenodd" d="M8.52001 2.52986C9.0371 1.91186 9.96666 1.82124 10.5975 2.32782C10.6324 2.35531 11.753 3.22586 11.753 3.22586C12.446 3.64479 12.6613 4.5354 12.2329 5.21506C12.2102 5.25146 5.87463 13.1763 5.87463 13.1763C5.66385 13.4393 5.34389 13.5945 5.00194 13.5982L2.57569 13.6287L2.02902 11.3149C1.95244 10.9895 2.02902 10.6478 2.2398 10.3849L8.52001 2.52986Z" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round"/>
			<path d="M7.34723 4.00059L10.9821 6.79201" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>
	
			</div>
			</div>
			</div>	
			</div>
			</div>
			<div class="sub-card draggable-handle draggable">
			<div class="d-items">
			<span class="text-success dang d-block mb-2">
			<svg class="me-1" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M15 4.5L6.75 12.75L3 9" stroke="#3AC977" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>
			Latest finished to do's
			</span>
			<div class="d-flex justify-content-between flex-wrap">
			<div class="d-items-2">
			<div>
			<svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
			<rect width="1" height="1" fill="#888888"/>
			<rect y="3" width="1" height="1" fill="#888888"/>
			<rect y="6" width="1" height="1" fill="#888888"/>
			<rect y="9" width="1" height="1" fill="#888888"/>
			<rect y="12" width="1" height="1" fill="#888888"/>
			<rect y="15" width="1" height="1" fill="#888888"/>
			<rect x="4" width="1" height="1" fill="#888888"/>
			<rect x="4" y="3" width="1" height="1" fill="#888888"/>
			<rect x="4" y="6" width="1" height="1" fill="#888888"/>
			<rect x="4" y="9" width="1" height="1" fill="#888888"/>
			<rect x="4" y="12" width="1" height="1" fill="#888888"/>
			<rect x="4" y="15" width="1" height="1" fill="#888888"/>
			<rect x="8" width="1" height="1" fill="#888888"/>
			<rect x="8" y="3" width="1" height="1" fill="#888888"/>
			<rect x="8" y="6" width="1" height="1" fill="#888888"/>
			<rect x="8" y="9" width="1" height="1" fill="#888888"/>
			<rect x="8" y="12" width="1" height="1" fill="#888888"/>
			<rect x="8" y="15" width="1" height="1" fill="#888888"/>
			</svg>
			</div>
			<div>
			<div class="form-check custom-checkbox">
			<input type="checkbox" class="form-check-input" id="customCheckBox2" required>
			<label class="form-check-label" for="customCheckBox2">Compete this projects Monday</label>
			</div>
			<span>2023-12-26 07:15:00</span>
			</div>
			</div>
			<div>
			<div class="icon-box icon-box-md bg-danger-light me-1">
			<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M12.8833 6.31213C12.8833 6.31213 12.5213 10.8021 12.3113 12.6935C12.2113 13.5968 11.6533 14.1261 10.7393 14.1428C8.99994 14.1741 7.25861 14.1761 5.51994 14.1395C4.64061 14.1215 4.09194 13.5855 3.99394 12.6981C3.78261 10.7901 3.42261 6.31213 3.42261 6.31213" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round"/>
			<path d="M13.8055 4.1598H2.50012" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round"/>
			<path d="M11.6271 4.1598C11.1037 4.1598 10.6531 3.7898 10.5504 3.27713L10.3884 2.46647C10.2884 2.09247 9.94974 1.8338 9.56374 1.8338H6.74174C6.35574 1.8338 6.01707 2.09247 5.91707 2.46647L5.75507 3.27713C5.65241 3.7898 5.20174 4.1598 4.67841 4.1598" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>
			</div>
			<div class="icon-box icon-box-md bg-primary-light">
			<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M9.16492 13.6286H14" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round"/>
			<path fill-rule="evenodd" clip-rule="evenodd" d="M8.52001 2.52986C9.0371 1.91186 9.96666 1.82124 10.5975 2.32782C10.6324 2.35531 11.753 3.22586 11.753 3.22586C12.446 3.64479 12.6613 4.5354 12.2329 5.21506C12.2102 5.25146 5.87463 13.1763 5.87463 13.1763C5.66385 13.4393 5.34389 13.5945 5.00194 13.5982L2.57569 13.6287L2.02902 11.3149C1.95244 10.9895 2.02902 10.6478 2.2398 10.3849L8.52001 2.52986Z" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round"/>
			<path d="M7.34723 4.00059L10.9821 6.79201" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>
	
			</div>
			</div>
			</div>	
			</div>
			</div>
			<div class="sub-card draggable-handle draggable">
			<div class="d-items">
			<div class="d-flex justify-content-between flex-wrap">
			<div class="d-items-2">
			<div>
			<svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
			<rect width="1" height="1" fill="#888888"/>
			<rect y="3" width="1" height="1" fill="#888888"/>
			<rect y="6" width="1" height="1" fill="#888888"/>
			<rect y="9" width="1" height="1" fill="#888888"/>
			<rect y="12" width="1" height="1" fill="#888888"/>
			<rect y="15" width="1" height="1" fill="#888888"/>
			<rect x="4" width="1" height="1" fill="#888888"/>
			<rect x="4" y="3" width="1" height="1" fill="#888888"/>
			<rect x="4" y="6" width="1" height="1" fill="#888888"/>
			<rect x="4" y="9" width="1" height="1" fill="#888888"/>
			<rect x="4" y="12" width="1" height="1" fill="#888888"/>
			<rect x="4" y="15" width="1" height="1" fill="#888888"/>
			<rect x="8" width="1" height="1" fill="#888888"/>
			<rect x="8" y="3" width="1" height="1" fill="#888888"/>
			<rect x="8" y="6" width="1" height="1" fill="#888888"/>
			<rect x="8" y="9" width="1" height="1" fill="#888888"/>
			<rect x="8" y="12" width="1" height="1" fill="#888888"/>
			<rect x="8" y="15" width="1" height="1" fill="#888888"/>
			</svg>
			</div>
			<div>
			<div class="form-check custom-checkbox">
			<input type="checkbox" class="form-check-input" id="customCheckBox3" required>
			<label class="form-check-label" for="customCheckBox3">Compete this projects Monday</label>
			</div>
			<span>2023-12-26 07:15:00</span>
			</div>
			</div>
			<div>
			<div class="icon-box icon-box-md bg-danger-light me-1">
			<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M12.8833 6.31213C12.8833 6.31213 12.5213 10.8021 12.3113 12.6935C12.2113 13.5968 11.6533 14.1261 10.7393 14.1428C8.99994 14.1741 7.25861 14.1761 5.51994 14.1395C4.64061 14.1215 4.09194 13.5855 3.99394 12.6981C3.78261 10.7901 3.42261 6.31213 3.42261 6.31213" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round"/>
			<path d="M13.8055 4.1598H2.50012" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round"/>
			<path d="M11.6271 4.1598C11.1037 4.1598 10.6531 3.7898 10.5504 3.27713L10.3884 2.46647C10.2884 2.09247 9.94974 1.8338 9.56374 1.8338H6.74174C6.35574 1.8338 6.01707 2.09247 5.91707 2.46647L5.75507 3.27713C5.65241 3.7898 5.20174 4.1598 4.67841 4.1598" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>
			</div>
			<div class="icon-box icon-box-md bg-primary-light">
			<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M9.16492 13.6286H14" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round"/>
			<path fill-rule="evenodd" clip-rule="evenodd" d="M8.52001 2.52986C9.0371 1.91186 9.96666 1.82124 10.5975 2.32782C10.6324 2.35531 11.753 3.22586 11.753 3.22586C12.446 3.64479 12.6613 4.5354 12.2329 5.21506C12.2102 5.25146 5.87463 13.1763 5.87463 13.1763C5.66385 13.4393 5.34389 13.5945 5.00194 13.5982L2.57569 13.6287L2.02902 11.3149C1.95244 10.9895 2.02902 10.6478 2.2398 10.3849L8.52001 2.52986Z" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round"/>
			<path d="M7.34723 4.00059L10.9821 6.79201" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>
	
			</div>
			</div>
			</div>	
			</div>
			</div>
			<div class="sub-card draggable-handle draggable">
			<div class="d-items">
			<div class="d-flex justify-content-between flex-wrap">
			<div class="d-items-2">
			<div>
			<svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
			<rect width="1" height="1" fill="#888888"/>
			<rect y="3" width="1" height="1" fill="#888888"/>
			<rect y="6" width="1" height="1" fill="#888888"/>
			<rect y="9" width="1" height="1" fill="#888888"/>
			<rect y="12" width="1" height="1" fill="#888888"/>
			<rect y="15" width="1" height="1" fill="#888888"/>
			<rect x="4" width="1" height="1" fill="#888888"/>
			<rect x="4" y="3" width="1" height="1" fill="#888888"/>
			<rect x="4" y="6" width="1" height="1" fill="#888888"/>
			<rect x="4" y="9" width="1" height="1" fill="#888888"/>
			<rect x="4" y="12" width="1" height="1" fill="#888888"/>
			<rect x="4" y="15" width="1" height="1" fill="#888888"/>
			<rect x="8" width="1" height="1" fill="#888888"/>
			<rect x="8" y="3" width="1" height="1" fill="#888888"/>
			<rect x="8" y="6" width="1" height="1" fill="#888888"/>
			<rect x="8" y="9" width="1" height="1" fill="#888888"/>
			<rect x="8" y="12" width="1" height="1" fill="#888888"/>
			<rect x="8" y="15" width="1" height="1" fill="#888888"/>
			</svg>
			</div>
			<div>
			<div class="form-check custom-checkbox">
			<input type="checkbox" class="form-check-input" id="customCheckBox4" required>
			<label class="form-check-label" for="customCheckBox4">Compete this projects Monday</label>
			</div>
			<span>2023-12-26 07:15:00</span>
			</div>
			</div>
			<div>
			<div class="icon-box icon-box-md bg-danger-light me-1">
			<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M12.8833 6.31213C12.8833 6.31213 12.5213 10.8021 12.3113 12.6935C12.2113 13.5968 11.6533 14.1261 10.7393 14.1428C8.99994 14.1741 7.25861 14.1761 5.51994 14.1395C4.64061 14.1215 4.09194 13.5855 3.99394 12.6981C3.78261 10.7901 3.42261 6.31213 3.42261 6.31213" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round"/>
			<path d="M13.8055 4.1598H2.50012" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round"/>
			<path d="M11.6271 4.1598C11.1037 4.1598 10.6531 3.7898 10.5504 3.27713L10.3884 2.46647C10.2884 2.09247 9.94974 1.8338 9.56374 1.8338H6.74174C6.35574 1.8338 6.01707 2.09247 5.91707 2.46647L5.75507 3.27713C5.65241 3.7898 5.20174 4.1598 4.67841 4.1598" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>
			</div>
			<div class="icon-box icon-box-md bg-primary-light">
			<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M9.16492 13.6286H14" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round"/>
			<path fill-rule="evenodd" clip-rule="evenodd" d="M8.52001 2.52986C9.0371 1.91186 9.96666 1.82124 10.5975 2.32782C10.6324 2.35531 11.753 3.22586 11.753 3.22586C12.446 3.64479 12.6613 4.5354 12.2329 5.21506C12.2102 5.25146 5.87463 13.1763 5.87463 13.1763C5.66385 13.4393 5.34389 13.5945 5.00194 13.5982L2.57569 13.6287L2.02902 11.3149C1.95244 10.9895 2.02902 10.6478 2.2398 10.3849L8.52001 2.52986Z" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round"/>
			<path d="M7.34723 4.00059L10.9821 6.79201" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>
	
			</div>
			</div>
			</div>	
			</div>
			</div>
			<div class="sub-card draggable-handle draggable">
			<div class="d-items">
			<div class="d-flex justify-content-between flex-wrap">
			<div class="d-items-2">
			<div>
			<svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
			<rect width="1" height="1" fill="#888888"/>
			<rect y="3" width="1" height="1" fill="#888888"/>
			<rect y="6" width="1" height="1" fill="#888888"/>
			<rect y="9" width="1" height="1" fill="#888888"/>
			<rect y="12" width="1" height="1" fill="#888888"/>
			<rect y="15" width="1" height="1" fill="#888888"/>
			<rect x="4" width="1" height="1" fill="#888888"/>
			<rect x="4" y="3" width="1" height="1" fill="#888888"/>
			<rect x="4" y="6" width="1" height="1" fill="#888888"/>
			<rect x="4" y="9" width="1" height="1" fill="#888888"/>
			<rect x="4" y="12" width="1" height="1" fill="#888888"/>
			<rect x="4" y="15" width="1" height="1" fill="#888888"/>
			<rect x="8" width="1" height="1" fill="#888888"/>
			<rect x="8" y="3" width="1" height="1" fill="#888888"/>
			<rect x="8" y="6" width="1" height="1" fill="#888888"/>
			<rect x="8" y="9" width="1" height="1" fill="#888888"/>
			<rect x="8" y="12" width="1" height="1" fill="#888888"/>
			<rect x="8" y="15" width="1" height="1" fill="#888888"/>
			</svg>
			</div>
			<div>
			<div class="form-check custom-checkbox">
			<input type="checkbox" class="form-check-input" id="customCheckBox5" required>
			<label class="form-check-label" for="customCheckBox5">Compete this projects Monday</label>
			</div>
			<span>2023-12-26 07:15:00</span>
			</div>
			</div>
			<div>
			<div class="icon-box icon-box-md bg-danger-light me-1">
			<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M12.8833 6.31213C12.8833 6.31213 12.5213 10.8021 12.3113 12.6935C12.2113 13.5968 11.6533 14.1261 10.7393 14.1428C8.99994 14.1741 7.25861 14.1761 5.51994 14.1395C4.64061 14.1215 4.09194 13.5855 3.99394 12.6981C3.78261 10.7901 3.42261 6.31213 3.42261 6.31213" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round"/>
			<path d="M13.8055 4.1598H2.50012" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round"/>
			<path d="M11.6271 4.1598C11.1037 4.1598 10.6531 3.7898 10.5504 3.27713L10.3884 2.46647C10.2884 2.09247 9.94974 1.8338 9.56374 1.8338H6.74174C6.35574 1.8338 6.01707 2.09247 5.91707 2.46647L5.75507 3.27713C5.65241 3.7898 5.20174 4.1598 4.67841 4.1598" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>
			</div>
			<div class="icon-box icon-box-md bg-primary-light">
			<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M9.16492 13.6286H14" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round"/>
			<path fill-rule="evenodd" clip-rule="evenodd" d="M8.52001 2.52986C9.0371 1.91186 9.96666 1.82124 10.5975 2.32782C10.6324 2.35531 11.753 3.22586 11.753 3.22586C12.446 3.64479 12.6613 4.5354 12.2329 5.21506C12.2102 5.25146 5.87463 13.1763 5.87463 13.1763C5.66385 13.4393 5.34389 13.5945 5.00194 13.5982L2.57569 13.6287L2.02902 11.3149C1.95244 10.9895 2.02902 10.6478 2.2398 10.3849L8.52001 2.52986Z" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round"/>
			<path d="M7.34723 4.00059L10.9821 6.79201" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>
			</div>
			</div>
			</div>	
			</div>
			</div>
			</div>
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
		<div class="offcanvas offcanvas-end customeoff" tabindex="-1" id="offcanvasExample">
		<div class="offcanvas-header">
		<h5 class="modal-title" id="#gridSystemModal">Add Employee</h5>
		<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
		<i class="fa-solid fa-xmark"></i>
		</button>
		</div>
		<div class="offcanvas-body">
		<div class="container-fluid">
		<div>
		<label>Profile Picture</label>
		<div class="dz-default dlab-message upload-img mb-3">	
		<form action="#" class="dropzone">
		<svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M27.1666 26.6667L20.4999 20L13.8333 26.6667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
		<path d="M20.5 20V35" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
		<path d="M34.4833 30.6501C36.1088 29.7638 37.393 28.3615 38.1331 26.6644C38.8731 24.9673 39.027 23.0721 38.5703 21.2779C38.1136 19.4836 37.0724 17.8926 35.6111 16.7558C34.1497 15.619 32.3514 15.0013 30.4999 15.0001H28.3999C27.8955 13.0488 26.9552 11.2373 25.6498 9.70171C24.3445 8.16614 22.708 6.94647 20.8634 6.1344C19.0189 5.32233 17.0142 4.93899 15.0001 5.01319C12.9861 5.0874 11.015 5.61722 9.23523 6.56283C7.45541 7.50844 5.91312 8.84523 4.7243 10.4727C3.53549 12.1002 2.73108 13.9759 2.37157 15.959C2.01205 17.9421 2.10678 19.9809 2.64862 21.9222C3.19047 23.8634 4.16534 25.6565 5.49994 27.1667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
		<path d="M27.1666 26.6667L20.4999 20L13.8333 26.6667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
		</svg>
		<div class="fallback">
		<input name="file" type="file" multiple>

		</div>
		</form>
		</div>	
		</div>
		<form>
		<div class="row">
		<div class="col-xl-6 mb-3">
		<label for="exampleFormControlInput1" class="form-label">Employee ID <span class="text-danger">*</span></label>
		<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
		</div>	
		<div class="col-xl-6 mb-3">
		<label for="exampleFormControlInput2" class="form-label">Employee Name<span class="text-danger">*</span></label>
		<input type="text" class="form-control" id="exampleFormControlInput2" placeholder="">
		</div>	
		<div class="col-xl-6 mb-3">
		<label for="exampleFormControlInput3" class="form-label">Employee Email<span class="text-danger">*</span></label>
		<input type="email" class="form-control" id="exampleFormControlInput3" placeholder="">
		</div>
		<div class="col-xl-6 mb-3">
		<label for="exampleFormControlInput4" class="form-label">Password<span class="text-danger">*</span></label>
		<input type="password" class="form-control" id="exampleFormControlInput4" placeholder="">
		</div>
		<div class="col-xl-6 mb-3">
		<label class="form-label">Designation<span class="text-danger">*</span></label>
		<select class="default-select form-control">
		<option  data-display="Select">Please select</option>
		<option value="html">Software Engineer</option>
		<option value="css">Civil Engineer</option>
		<option value="javascript">Web Doveloper</option>
		</select>
		</div>	
		<div class="col-xl-6 mb-3">
		<label class="form-label">Department<span class="text-danger">*</span></label>
		<select class="default-select form-control">
		<option  data-display="Select">Please select</option>
		<option value="html">Software</option>
		<option value="css">Doit</option>
		<option value="javascript">Designing</option>
		</select>
		</div>
		<div class="col-xl-6 mb-3">
		<label class="form-label">Country<span class="text-danger">*</span></label>
		<select class="default-select form-control">
		<option  data-display="Select">Please select</option>
		<option value="html">Ind</option>
		<option value="css">USA</option>
		<option value="javascript">UK</option>
		</select>
		</div>
		<div class="col-xl-6 mb-3">
		<label for="exampleFormControlInput88" class="form-label">Mobile<span class="text-danger">*</span></label>
		<input type="number" class="form-control" id="exampleFormControlInput88" placeholder="">
		</div>
		<div class="col-xl-6 mb-3">
		<label class="form-label">Gender<span class="text-danger">*</span></label>
		<select class="default-select form-control">
		<option  data-display="Select">Please select</option>
		<option value="html">Male</option>
		<option value="css">Female</option>
		<option value="javascript">Other</option>
		</select>
		</div>
		<div class="col-xl-6 mb-3">
		<label for="exampleFormControlInput99" class="form-label">Joining Date<span class="text-danger">*</span></label>
		<input type="date" class="form-control" id="exampleFormControlInput99">
		</div>
		<div class="col-xl-6 mb-3">
		<label for="exampleFormControlInput8" class="form-label">Date of Birth<span class="text-danger">*</span></label>
		<input type="date" class="form-control" id="exampleFormControlInput8">
		</div>
		<div class="col-xl-6 mb-3">
		<label for="exampleFormControlInput10" class="form-label">Reporting To<span class="text-danger">*</span></label>
		<input type="text" class="form-control" id="exampleFormControlInput10" placeholder="">
		</div>		
		<div class="col-xl-6 mb-3">
		<label class="form-label">Language Select<span class="text-danger">*</span></label>
		<select class="default-select form-control">
		<option  data-display="Select">Please select</option>
		<option value="html">English</option>
		<option value="css">Hindi</option>
		<option value="javascript">Canada</option>
		</select>
		</div>
		<div class="col-xl-6 mb-3">
		<label class="form-label">User Role<span class="text-danger">*</span></label>
		<select class="default-select form-control">
		<option  data-display="Select">Please select</option>
		<option value="html">Parmanent</option>
		<option value="css">Parttime</option>
		<option value="javascript">Per Hours</option>
		</select>
		</div>
		<div class="col-xl-12 mb-3">
		<label class="form-label">Address<span class="text-danger">*</span></label>
		<textarea rows="2" class="form-control"></textarea>
		</div>
		<div class="col-xl-12 mb-3">
		<label class="form-label">About<span class="text-danger">*</span></label>
		<textarea rows="2" class="form-control"></textarea>
		</div>	
		</div>
		<div>
		<button class="btn btn-primary me-1">Submit</button>
		<button class="btn btn-danger light ms-1">Cancel</button>
		</div>
		</form>
		</div>
		</div>
		</div>		

		<div class="offcanvas offcanvas-end customeoff" tabindex="-1" id="offcanvasExample1">
		<div class="offcanvas-header">
		<h5 class="modal-title" id="#gridSystemModal1">Add New Task</h5>
		<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
		<i class="fa-solid fa-xmark"></i>
		</button>
		</div>
		<div class="offcanvas-body">
		<div class="container-fluid">
		<form>
		<div class="row">
		<div class="col-xl-6 mb-3">
		<label for="exampleFormControlInputfirst" class="form-label">Title<span class="text-danger">*</span></label>
		<input type="text" class="form-control" id="exampleFormControlInputfirst" placeholder="Title">
		</div>	
		<div class="col-xl-6 mb-3">
		<label class="form-label">Project<span class="text-danger">*</span></label>
		<select class="default-select form-control">
		<option  data-display="Select">Project</option>
		<option value="html">Salesmate</option>
		<option value="css">ActiveCampaign</option>
		<option value="javascript">Insightly</option>
		</select>
		</div>	
		<div class="col-xl-6 mb-3">
		<label for="exampleFormControlInputthree" class="form-label">Start Date<span class="text-danger">*</span></label>
		<input type="date" class="form-control" id="exampleFormControlInputthree">
		</div>
		<div class="col-xl-6 mb-3">
		<label for="exampleFormControlInputfour" class="form-label">End Date<span class="text-danger">*</span></label>
		<input type="date" class="form-control" id="exampleFormControlInputfour">
		</div>
		<div class="col-xl-6 mb-3">
		<label class="form-label">Estimated Hour<span class="text-danger">*</span></label>
		<div class="input-group">
		<input type="text" class="form-control" value="09:30"><span class="input-group-text"><i
		class="fas fa-clock"></i></span>
		</div>
		</div>
		<div class="col-xl-6 mb-3">
		<label class="form-label">Status<span class="text-danger">*</span></label>
		<select class="default-select form-control">
		<option  data-display="Select">Status</option>
		<option value="html">In Progess</option>
		<option value="css">Pending</option>
		<option value="javascript">Completed</option>
		</select>
		</div>
		<div class="col-xl-6 mb-3">
		<label class="form-label">priority<span class="text-danger">*</span></label>
		<select class="default-select form-control">
		<option  data-display="Select">priority</option>
		<option value="html">Hight</option>
		<option value="css">Medium</option>
		<option value="javascript">Low</option>
		</select>
		</div>
		<div class="col-xl-6 mb-3">
		<label class="form-label">Category<span class="text-danger">*</span></label>
		<select class="default-select form-control">
		<option  data-display="Select">Category</option>
		<option value="html">Designing</option>
		<option value="css">Development</option>
		<option value="javascript">react developer</option>
		</select>
		</div>
		<div class="col-xl-6 mb-3">
		<label class="form-label">Permission<span class="text-danger">*</span></label>
		<select class="default-select form-control">
		<option  data-display="Select">Permission</option>
		<option value="html">Public</option>
		<option value="css">Private</option>
		</select>
		</div>
		<div class="col-xl-6 mb-3">
		<label class="form-label">Deadline add<span class="text-danger">*</span></label>
		<select class="default-select form-control">
		<option  data-display="Select">Deadline</option>
		<option value="html">Yes</option>
		<option value="css">No</option>
		</select>
		</div>
		<div class="col-xl-6 mb-3">
		<label class="form-label">Assigned to<span class="text-danger">*</span></label>
		<select class="default-select form-control">
		<option  data-display="Select">Assigned</option>
		<option value="html">Bernard</option>
		<option value="css">Sergey Brin</option>
		<option value="javascript"> Larry Ellison</option>
		</select>
		</div>
		<div class="col-xl-6 mb-3">
		<label class="form-label">Responsible Person<span class="text-danger">*</span></label>
		<input name='tagify' class="form-control py-0 ps-0" value='James, Harry'>

		</div>
		<div class="col-xl-12 mb-3">
		<label class="form-label">Description<span class="text-danger">*</span></label>
		<textarea rows="3" class="form-control"></textarea>
		</div>
		<div class="col-xl-12 mb-3">
		<label class="form-label">Summary<span class="text-danger">*</span></label>
		<textarea rows="3" class="form-control"></textarea>
		</div>

		</div>
		<div>
		<button class="btn btn-primary me-1">Help Desk</button>
		<button class="btn btn-danger light ms-1">Cancel</button>
		</div>
		</form>
		</div>
		</div>
		</div>	
		<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
		<div class="modal-dialog modal-dialog-center">
		<div class="modal-content">
		<div class="modal-header">
		<h1 class="modal-title fs-5" id="exampleModalLabel1">Invite Employee</h1>
		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
		<div class="row">
		<div class="col-xl-12">
		<label class="form-label">Email ID<span class="text-danger">*</span></label>
		<input type="email" class="form-control" placeholder="hello@gmail.com">
		<label class="form-label mt-3">Employment date<span class="text-danger">*</span></label>
		<input class="form-control" type="date">
		<div class="row">
		<div class="col-xl-6">
		<label class="form-label mt-3">First Name<span class="text-danger">*</span></label>
		<div class="input-group">
		<input type="text" class="form-control" placeholder="Name">
		</div>
		</div>
		<div class="col-xl-6">
		<label class="form-label mt-3">Last Name<span class="text-danger">*</span></label>
		<div class="input-group">
		<input type="text" class="form-control" placeholder="Surname">
		</div>
		</div>
		</div>
		<div class="mt-3 invite">
		<label class="form-label">Send invitation email<span class="text-danger">*</span></label>
		<input type ="email" class="form-control " placeholder="+ invite">
		</div>
        </div>
		</div>
		</div>
		<div class="modal-footer">
		<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
		<button type="button" class="btn btn-primary">Save changes</button>
		</div>
		</div>
		</div>
		</div>
		@endsection