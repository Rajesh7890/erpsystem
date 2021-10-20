
$(document).ready(function(){

	var login = $('#loginform');
	var recover = $('#recoverform');
	var teacher = $('#teacherform');
	var forgot = $('#forgotform');
	var speed = 400;

	$('#to-teacher').click(function(){
		
		$("#loginform").slideUp();
		$("#teacherform").fadeIn();
	});

	$('#to-recover').click(function(){
		
		$("#loginform").slideUp();
		$("#recoverform").fadeIn();
	});

	$('#teacher-forgot').click(function(){
		
		$("#teacherform").slideUp();
		$("#forgotform").fadeIn();
	});
	
	$('#teacher-login').click(function(){
		
		$("#teacherform").hide();
		$("#loginform").fadeIn();
	});

	$('#teacher-login').click(function(){
	
	});

	$('#to-login').click(function(){
		
		$("#recoverform").hide();
		$("#loginform").fadeIn();
	});
	
	
	$('#to-login').click(function(){
	
	});

    $('#forgot-login').click(function(){
		
		$("#forgotform").hide();
		$("#teacherform").fadeIn();
	});

	$('#forgot-login').click(function(){
	
	});
    
});