<?php include_once('config.php');?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"  crossorigin="anonymous">
	<link rel="stylesheet" href="css/form-style-z.css" type="text/css">
	
	<title>welcome</title>
</head>
<body style="background: url(images/ers1.jpg) no-repeat center center; background-size:cover;">
	<div class="overlay"></div>
	<div class="container">
		<div class="mt-2 mb-4">
			<div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 ml-auto mr-auto">
				<div class="col-sm-12 border border-primary shadow rounded bg-white py-2 text-center">
					<h1>Welcome <?php echo ucfirst($_SESSION['name']); ?></h1>
					<a href="logout.php" class="text-muted"><i class="fa fa-fw fa-power-off"></i> Logout</a>
				</div>
			</div> <!--/.col-xs-12 col-sm-8 col-md-6 col-lg-4-->
		</div> <!--/.mt-2 mb-4-->
	</div> <!--/.container-->
	
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"  crossorigin="anonymous"></script>
	<script src="js/form-script.js"></script>
</body>
</html>