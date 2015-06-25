// JavaScript Document

$(document).ready(function(){
	//global vars
	var form = $(".ge-signup-form-frame");
	var ge_email = $("#ge-emailaddress");
	
	//On blur
	ge_email.blur(validateGE_Email);
	//On Submitting
	form.submit(function(){
		if(validateGE_Email())
			return true
		else
			return false;
	});
	
	//validation functions
	function validateGE_Email(){
		//testing regular expression
		var a = $("#ge-emailaddress").val();
		var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
		//if it's valid email
		if(filter.test(a)){
			ge_email.removeClass("error");
			return true;
		}
		//if it's NOT valid
		else{
			ge_email.addClass("error");
			return false;
		}
	}
});

$(document).ready(function(){
	$('.ge-signup-form-frame').ajaxForm(function(data) {
		if (data==100){$('.ge-signup-success').fadeIn("fast"); $('.ge-signup-form-frame').resetForm();}
	});
});