@extends('master.master')
@section('title','trainee')
@section('content')
	<section class="content-2" style="background-color: rgb(255, 255, 255);">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    
					<div class="well">
                        <h3>To Give FeedBack<br><a href="{!! URL::to('/clients/create_newsletter') !!}" class="btn btn-lg btn-info" style="background-color:#5C6BC0">Click Here</a></h3>
                    </div>
					<br>
                    <div class="well">
                        <h3>Health Details<a href="{!! URL::to('/') !!}" class="btn btn-lg btn-info"  style="background-color:#FFE082" >Fill Up The Form</a></h3>
						<a href="{!! URL::to('/') !!}" class="btn btn-lg btn-info" style="background-color:#FFA000">Edit The Form</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="well">
						<div class="panel panel-info">
							<div class="panel-heading">
							  <h3 class="panel-title"    >Trainee Name</h3>
							</div>
							<div class="panel-body">
								<div class="row">
								
									<div class=" col-md-9 col-lg-9 "> 
										<table class="table table-user-information">
											<tbody>
												<tr>
													<td>ID Code:</td>
													<td>18071</td>
												</tr>
												<tr>
													<td>Birth Place:</td>
													<td>Bangladesh</td>
												</tr>
												<tr>
													<td>Birth Date:</td>
													<td>06/23/2013</td>
												</tr>
												
											   <tr>
													<td>Gender:</td>
													<td>Male</td>
												</tr>
												<tr>
													<td>Home Address:</td>
													<td>  </td>
												</tr>
												<tr>
													<td>Email:</td>
													<td><a href="">tahmi@yahoo.com</a></td>
												</tr>
												<tr>
													<td>Phone Number:</td>
													<td>01737-585474</td>
											   
												</tr>
										 
											</tbody>
										</table>
									  
									</div>
								</div>
							</div>
                        
                                    
						</div>
                                
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="well">
                        <h3>Registration<a href="{!! URL::to('/') !!}" class="btn btn-lg btn-info"  style="background-color:#CE93D8">Fill Up The Form</a></h3>
						<a href="{!! URL::to('/') !!}" class="btn btn-lg btn-info" style="background-color:#9C27B0">Edit The Form</a>
						
                    </div>
                    <br>
                    <div class="well">
                        <h3>Information Sheet<a href="{!! URL::to('/') !!}" class="btn btn-lg btn-info" style="background-color:#69F0AE">Fill Up The Form</a></h3>
						<a href="{!! URL::to('/') !!}" class="btn btn-lg btn-info" style="background-color:#00C853">Edit The Form</a>
                    </div>
					
					
                </div>
            </div>
        </div>
    </section>
@endsection