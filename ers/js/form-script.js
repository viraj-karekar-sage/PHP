$(document).ready(function() {
		$("#singnupFrom").validate({
			rules: {
			'firstname': {
			required: true,
			minlength: 2,
			maxlength: 30
			},
			'signupemail':{
			required: true,
			email:true,
			},
			'mobile_no':{
				number: true,
				minlength: 10,
				maxlength: 10
			},
			'signupusername':{
				required: true,
			},
			'signuppassword':{
				required: true,
			},
		},
		messages: {
		'firstname': "Please enter first name",
		'signuppassword': "Please enter password.",
		'signupemail':{
			required: "Please enter email.",
			email:"please provide valid email format",
		},
		'signupusername': "Please enter username",
			'mobile_no':{
				number: "Please enter only numeric",
				minlength: "phone number lenght is less than 10",
				maxlength: "phone number cannot exceed more than 10"
			},
		},
		submitHandler: function (form) {
			if($('#singninFrom').valid()){
				formValidate('#singnupFrom','#signUpMsg');
			}
			
		}
		});

		$("#singninFrom").validate({
			rules: {
			'signinname': {
			required: true,
			},
			'signinpassword':{
			required: true,
			},
		},
		messages: {
		'signinname': "Please enter username or email",
		'signinpassword': "Please enter password.",
		},
		submitHandler: function (form) {
			if($('#singninFrom').valid()){
				formValidate('#singninFrom','#signInMsg');
			}
			
		}
		});
});

function formValidate(formId,formMsg){
	$.ajax({
			type:'POST',
			url:'ajax/action-form.php',
			data:$(formId).serialize(),
			success: function(data){
				setTimeout(function(){$(".overlay").hide()},800);
				var a	=	 data.split('|***|');
				if(a[1]==1){
					$(formId)[0].reset();
					$(formMsg).html(a[0]);
					if(typeof(a[2]) != "undefined" && a[2] !== null) {
						setTimeout(function(){window.location.href=""+a[2]},800);
					}
					else{
						$('html, body').animate({
							scrollTop: "0px"
						}, 800);
					}
				}else{
					$(formMsg).html(a[0]);
				}
			}
		});
}
	