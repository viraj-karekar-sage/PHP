<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/form-style-z.css" type="text/css">
	
	<title>ERS</title>
	<style>
		.error{
    		color: red !important;
		}
	</style>
</head>
<body style="background: url(images/ers1.jpg) no-repeat center center; background-size:cover cover; height:100vh;">
	<div class="overlay"></div>
	<div class="container">
		<div class="mt-2 mb-4">
			<div class="col-xs-12 col-sm-8 col-md-6 col-lg-4 ml-auto mr-auto">
				<ul class="nav nav-pills nav-fill mb-1" id="pills-tab" role="tablist">
					<li class="nav-item"> <a class="nav-link active" id="pills-signin-tab" data-toggle="pill" href="#pills-signin" role="tab" aria-controls="pills-signin" aria-selected="true">Login</a> </li>
					<li class="nav-item"> <a class="nav-link" id="pills-signup-tab" data-toggle="pill" href="#pills-signup" role="tab" aria-controls="pills-signup" aria-selected="false">Employee Registration</a> </li>
				</ul>
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="pills-signin" role="tabpanel" aria-labelledby="pills-signin-tab">
						<div class="col-sm-12 border border-primary shadow rounded bg-white pt-2">
							<div class="text-center"><i class="fa fa-user"></i></div>
							<em id="signInMsg"></em>
							<form method="post" id="singninFrom" onSubmit="return false;">
								<div class="form-group">
									<label class="font-weight-bold">Email <span class="badge badge-secondary">OR</span> Login Name <span class="text-danger">*</span></label>
									<input type="text" name="signinname" id="signinname" class="form-control form-control-lg" autocomplete="off" >
								</div>
								<div class="form-group">
									<label class="font-weight-bold">Password <span class="text-danger">*</span></label>
									<input type="password" name="signinpassword" id="signinpassword" class="form-control form-control-lg" autocomplete="off" >
								</div>
								<div class="form-group">
									<button type="submit" name="signinSubmit" id="signinSubmit" value="Sign In"  class="btn btn-block btn-primary"><i class="fa fa-sign-in"></i> Sign In</button>
								</div>
							</form>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab">
						<div class="col-sm-12 border border-primary shadow rounded bg-white pt-2">
							<div class="text-center"><i class="fa fa-user"></i></div>
							<em id="signUpMsg"></em>
							<form method="post" id="singnupFrom" onSubmit="return false;">
								<div class="form-group">
									<label class="font-weight-bold">First Name<span class="text-danger">*</span></label>
									<input type="text" name="firstname" id="firstname" class="form-control form-control-lg" >
								</div>
								<div class="form-group">
									<label class="font-weight-bold">Last Name<span class="text-danger"></span></label>
									<input type="text" name="lastname" id="lastname" class="form-control form-control-lg" >
								</div>
								<div class="form-group">
									<label class="font-weight-bold">Email <span class="text-danger">*</span></label>
									<input type="email" name="signupemail" id="signupemail" class="form-control form-control-lg">
								</div>
								<div class="form-group">
									<label class="font-weight-bold">Mobile Number <span class="text-danger"></span></label>
									<input type="text" name="mobile_no" id="mobile_no" class="form-control form-control-lg" >
								</div>
								<div class="form-group">
								<label class="font-weight-bold">Select Role <span class="text-danger"></span></label>
									<select class="form-select form-select-lg form-control form-control-lg" name="role" id="role">
									<option value="onsite">Onsite</option>
									<option value="ofsite">Ofsite</option>
									</select>
								</div>
								<div class="form-group">
									<label class="font-weight-bold">Password <span class="text-danger">*</span></label>
									<input type="password" name="signuppassword" id="signuppassword" class="form-control form-control-lg" placeholder="*********" >
								</div>
								<div class="form-group">
									<label class="font-weight-bold">Username <span class="text-danger">*</span></label>
									<input type="text" name="signupusername" id="signupusername" class="form-control form-control-lg"  >
								</div>
								<div class="form-group">
									<label class="font-weight-bold">Address<span class="text-danger"></span></label>
									<textarea name="address" id="address" class="form-control form-control-lg" > </textarea>
								</div>
								<div class="form-group">
									<button type="submit" name="signupSubmit" id="signupSubmit" value="Sign Up" class="btn btn-block btn-primary" ><i class="fa fa-sign-in"></i> Sign Up</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div> <!--/.col-xs-12 col-sm-8 col-md-6 col-lg-4-->
			
			<!-- Modal -->
			<div class="modal fade" id="forgotPass" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<form method="post" id="forgotpassForm" onSubmit="return false;">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title"><i class="fa fa-fw fa-lock-open"></i> Forgot Password</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
							</div>
							<div class="modal-body"> <em id="forgotPassMsg"></em>
								<div class="form-group">
									<label class="font-weight-bold">Email <span class="badge badge-secondary">OR</span> Login Name <span class="text-danger">*</span></label>
									<input type="text" name="forgotemail" id="forgotemail" class="form-control form-control-lg" placeholder="Valid email or login name" data-required>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-fw fa-long-arrow-alt-left"></i> Sign In</button>
								<button type="submit" name="forgotPassSubmit" id="forgotPassSubmit" class="btn btn-primary" onClick="return formValidate('#forgotpassForm','#forgotPassMsg');"><i class="fa fa-envelope"></i> Send Request</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div> <!--/.mt-2 mb-4-->
	</div> <!--/.container-->
	
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"  crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
	<script src="js/form-script.js"></script>
</body>
</html>