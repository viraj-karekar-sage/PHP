<?php
include_once('../config.php');


if(isset($_REQUEST['signinname']) and $_REQUEST['signinname']!=""){
	extract($_REQUEST);
	$getUsers	=	$db->getAllRecords('tb_user','id,username,useremail,userpassword',' AND ((useremail="'.$signinname.'") OR (username="'.$signinname.'"))');
	if(isset($getUsers[0]['userpassword']) and $getUsers[0]['userpassword']!=""){
		/*
		** Get and varify user password
		*/
		$hash	=	$getUsers[0]['userpassword'];
		
		if(password_verify($signinpassword, $hash)){
			$_SESSION['id']			=	$getUsers[0]['id'];
			$_SESSION['name']		=	$getUsers[0]['username'];
			echo '<div class="alert alert-success p-1 mt-1"><i class="fa fa-fw fa-thumbs-up"></i> Login successfully <strong>Please wait..!</strong></div>|***|1|***|home.php';
			exit;
		} else {
			echo '<div class="alert alert-danger p-1 mt-1"><i class="fa fa-fw fa-exclamation-triangle"></i> Invalid password!</div>|***|0';
			exit;
		}
	}else{
		echo '<div class="alert alert-danger p-1 mt-1"><i class="fa fa-fw fa-exclamation-triangle"></i> User not exist or not varified!</div>|***|0';
		exit;
	}
	
}

if(isset($_REQUEST['signupemail']) and $_REQUEST['signupemail']!=""){
	extract($_REQUEST);

	if($signupemail=="" || $firstname=="" || $signuppassword=="" || $signupusername=="" || $signupemail==""){
		echo '<div class="alert alert-danger p-1 mt-1"><i class="fa fa-fw fa-exclamation-triangle"></i> Please enter all mendatory feilds</div>|***|0';
		exit;
	}
	
	$getUsers	=	$db->getQueryCount('tb_user','id',' AND useremail="'.$signupemail.'" ');
	if($getUsers[0]['total']){
		echo '<div class="alert alert-danger p-1 mt-1"><i class="fa fa-fw fa-exclamation-triangle"></i> Email already exist!</div>|***|0';
		exit;
	}
	$getUsers	=	$db->getQueryCount('tb_user','id',' AND username="'.$signupusername.'" ');
	if($getUsers[0]['total']){
		echo '<div class="alert alert-danger p-1 mt-1"><i class="fa fa-fw fa-exclamation-triangle"></i> Username already exist!</div>|***|0';
		exit;
	}
	if(!filter_var($signupemail,FILTER_VALIDATE_EMAIL)){
		echo '<div class="alert alert-danger p-1 mt-1"><i class="fa fa-fw fa-exclamation-triangle"></i> Email address is not valid!</div>|***|0';
		exit;
	}
	
	$options	=	 array('cost' => 12);
	$hash		=	 password_hash($signuppassword, PASSWORD_BCRYPT, $options);
	
	$data		=	array(
						'useremail'=>$signupemail,
						'firstname'=>$firstname,
						'userpassword'=>$hash,
						'lastname'=>$lastname,
						'address'=>$address,
						'role'=>$role,
						'mobile_no'=>$mobile_no,
						'username'=>$signupusername
						);
	$insert		=	$db->insert('tb_user',$data);
	
	if($insert){
		echo '<div class="alert alert-success p-1 mt-1"><i class="fa fa-fw fa-thumbs-up"></i> Registration successfully <strong>Please login..!</strong></div>|***|1';
		exit;	
	}else{
		echo '<div class="alert alert-danger p-1 mt-1"><i class="fa fa-fw fa-exclamation-triangle"></i> Error message goes here!</div>|***|0';
		exit;
	}
}


