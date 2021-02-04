@extends('layouts.pages')
@section('title','Prof Assase | Contact')
@section('body')

<style type="text/css">
	.contact-box{
		box-shadow: 1px 2px 3px rgba(0,0,0,0.24);
	}

	.right-form{
		background-color: #ececec;
		padding: 20px;
	}

	.btn-submit{
		background-color: #141d26;
		color: white;
		padding: 5px;
		padding-right: 20px;
		padding-left: 20px;
		outline: none !important;
		border: none;

	}

	.left-details{
		background-color: #141d26;
		padding: 30px;
		color: white;
	}
	.left-details p{
		padding: 0;
		margin: 0;
		font-weight: lighter;
	}
</style>

@if ($errors->any())
		<div class="col-sm-12">
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				@foreach ($errors->all() as $error)
				<span><p>{{ $error }}</p></span>
				@endforeach
			</div>
		</div>
		@endif

		@if(session('serverError'))
		<p class="alert {{Session::get('alert-class', 'alert-info')}}">
		{{session('serverError')}}</p>
		@endif




@if (session('success'))
		<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			Launch Modal
		</button> -->
		<script>
			$(document).ready(function(){
				$("#exampleModal").modal('show');
			});
		</script>

		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Success</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						{{session('success')}}
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
					</div>
				</div>
			</div>
			
		</div>

		@endif
		

<div class="container" style="margin-top: 00px; margin-bottom: 50px;">
	
	<div>
		<h4 style="color: white; text-align: left;">Get in Touch</h4>
	</div>

	<div class="contact-box">
		<div class="row">
			<!-- contact details -->
			<div class="col-md-4 left-details">
				<!--  location -->
				<div class="location">
					<img src="{{url('/').'/IMAGES/location.png'}}" width="20px" height="20px">
					<div style="margin-top: 10px">
						<p>Office location</p>

						<p>International Programmes Office</p>
						<p>Vice-Chancellor's Office</p>
						<p>Administration Block II</p>
						<p>Kwame Nkrumah University of Science and Technology, Kumasi, Ghana</p>
					</div>
				</div>

				<!-- contacts -->

				<div class="contact" style="margin-top: 50px">
					<img src="{{url('/').'/IMAGES/mailW.png'}}" width="20px" height="20px">
					<div style="margin-top: 10px">
						<p>Contact Details</p>

						<p>email: developers.hubltd@gmail.com</p>
					</div>
				</div>

				<!-- email details -->
				<div class="location" style="margin-top: 50px">
					<img src="{{url('/').'/IMAGES/phoneW.png'}}" width="20px" height="20px">
					<div style="margin-top: 10px">
						<p>Contact Us</p>

						<p>phone: +(233) 572 540 490</p>
						<p>mobile: +(233) 206 864 080</p>
					</div>
				</div>


				
				

			</div>
			<div class="col-md-8 right-form">
				<div><h5>Get in Touch</h5></div>
				
					<div class="row" style="margin-top: 20px">
						<div class="col-md-2">
							<label>Name</label>
						</div>
						<div class="col-md-10">
							<div class="form-group">
								<input type="text" class="form-control" name="nname" placeholder="Enter your name">
							</div>
						</div>
					</div>
						<!-- email -->
					<div class="row" style="margin-top: 10px">
						<div class="col-md-2">
							<label>Email</label>
						</div>
						<div class="col-md-10">
							<div class="form-group">
								<input type="email" class="form-control" name="emailname" placeholder="Enter your email">
							</div>
						</div>
					</div>

					<!-- subject -->
					<div class="row" style="margin-top: 10px">
						<div class="col-md-2">
							<label>Subject</label>
						</div>
						<div class="col-md-10">
							<div class="form-group">
								<input type="text" class="form-control" name="subjectname" placeholder="Enter your subject">
							</div>
						</div>
					</div>

					<!-- Review -->
					<div class="row" style="margin-top: 20px">
						<div class="col-md-2">
							<label>Package</label>
						</div>
						<div class="col-md-10">
							<div class="form-group">
								<textarea class="form-control" style="resize: none" cols="20" rows="6" placeholder="Please explain your package in detail." name="detailname"></textarea>
							</div>
						</div>
					</div>
					<!-- submit button -->
					<div class="row" style="margin-top: 20px">
						<div class="col-md-2"></div>
						<div class="col-md-10">
							<div class="form-group">
								<a href="mailto:developers.hubltd@gmail.com"><button type="submit" class="btn-submit">SEND US A MAIL</button></a>

								<!-- <button type="submit" class="btn-submit">SEND US A MAIL</button> -->
							</div>
						</div>
					</div>
					
				
				
			</div>
		</div>
	</div>
	
</div>


@endsection




