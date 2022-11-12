
<?php include('employee.php');
$employee_obj = new employee();
$details = $employee_obj -> displayDetails();
//echo '<pre>';
//print_r($details);
?>

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
<body>
	<div class="overlay"></div>
	<div class="container">
		<div class="mt-4 mb-4">
			<div class="col-xs-12 col-sm-8 col-md-6 col-lg-4 ml-auto mr-auto">
				<ul class="nav nav-pills nav-fill mb-1" id="pills-tab" role="tablist">
					<li class="nav-item"> <a class="nav-link active" id="pills-signin-tab" data-toggle="pill" href="#pills-signin" role="tab" aria-controls="pills-signin" aria-selected="true">Login</a> </li>
					<li class="nav-item"> <a class="nav-link" id="pills-signup-tab" data-toggle="pill" href="#pills-signup" role="tab" aria-controls="pills-signup" aria-selected="false">Employee Registration</a> </li>
				</ul>
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="pills-signin" role="tabpanel" aria-labelledby="pills-signin-tab">	
					<!-- logic for add goes here --> 
                
                    <div class="panel-body">
                <form role="form" id="signupform" name="signupform">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="First Name *" name="first_name" id="first_name" type="text"  maxlength="30" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Last Name" name="last_name" id="last_name" type="text"  maxlength="30">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Email *" name="email" id="email" type="email"  maxlength="30">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Mobile Number" name="mobile_number" id="mobile_number" type="text"  maxlength="30">
                        </div>
                        <div class="form-group">
                            Role
                            <select class="form-control" name="role" id="role">
                                <option value="onsite">Onsite</option>
                                <option value="offshore">Offshore</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Username *" name="username" id="username" type="text"  maxlength="10">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password *" name="password" id="password" type="password"  maxlength="10">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Address" name="address" id="address"></textarea>
                        </div>
                        <button type="button" id="signupbutton" class="btn btn-lg btn-primary btn-block"><span class="glyphicon glyphicon-check"></span> <span id="signtext">Sign Up</span></button>
                    </fieldset>
                </form>
            </div>
                
                    
                    </div>
					<div class="tab-pane fade" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab">
                    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">FirstName</th>
      <th scope="col">Username</th>
      <th scope="col">UserEmail</th>
      <th scope="col">Role</th>
      <th scope="col">address</th>
      <th scope="col">lastname</th>
      <th scope="col">MobileNO</th>
    </tr>
  </thead>
  <?php if (isset( $details)&& !empty($details)) { ?>

    <tbody>
    <?php foreach($details as $key=>$value) { ?>

<tr>
      <th scope="row"><?php echo $key; ?></th>
      <td><?php echo $value['firstname']; ?></td>
      <td><?php echo $value['username']; ?></td>
      <td><?php echo $value['useremail']; ?></td>
      <td><?php echo $value['role'] ;?></td>
      <td><?php echo $value['address'] ;?></td>
      <td><?php echo $value['lastname'] ;?></td>
      <td><?php echo $value['mobile_no'] ;?></td>
    </tr>
    
   <?php } } ?>
  
    </tbody>
 

</table>
					</div>
				</div>
			</div> <!--/.col-xs-12 col-sm-8 col-md-6 col-lg-4-->
		</div> <!--/.mt-2 mb-4-->
	</div> <!--/.container-->
	
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"  crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            // Checking if first name is empty
           /* $("#first_name").blur(function(){
                var first_name = $('#first_name').val();
                if(first_name.length == 0){
                    alert('First Name is Required');
                }
            });

            // Checking if email is empty
            $("#email").blur(function(){
                var email = $('#email').val();
                if(email.length == 0){
                    alert('Email is Required');
                }
            });

            // Checking if username is empty
            $("#username").blur(function(){
                var username = $('#username').val();
                if(username.length == 0){
                    alert('Username is Required');
                }
            });

            // Checking if password is empty
            $("#password").blur(function(){
                var password = $('#password').val();
                if(password.length == 0){
                    alert('Password is Required');
                }
            });
             */
            $(document).on('click', '#signupbutton', function(){
                
                var first_name = $('#first_name').val();
                var email = $('#email').val();
                var username = $('#username').val();
                var password = $('#password').val();
                if(first_name.length == 0 && first_name.length !="" ){
                    alert('First Name is Required');
                    return false;
                } // Check if email is valid one
              
                if(email.length == 0){
                    alert('Email is Required');
                    return false;
                }
                if(username.length == 0){
                    alert('Username is Required');
                    return false;
                }
               
                if(password.length == 0){
                    alert('Password is Required');
                    return false;
                }

                var signupform = $('#signupform').serialize();
                $.ajax({
                    method: 'POST',
                    url: 'registration.php',
                    data: signupform,
                    success:function(data){
                        alert(data);
                        window.location.reload();
                    } 
                });
            });
        });
    </script>
</body>
</html>