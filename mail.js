$(function(){
	$('#mailbtn').click(function(){
		var name = $('#name').val();
		var phone = $('#phone').val();
		var email = $('#email').val();
		var subject = $('#subject').val();
		var message = $('#message').val();

		if(!name || !phone || !subject || !email || !message){
			alert('Fill the entire form please');
		}else{
			$.get('mail.php',{name:name, phone:phone, subject:subject, email:email, message:message}, function(ret){
				$('#status').html(ret); //the html text which is returned by php will be displayed above register submit
			});
			
			$('.form-control').val(''); //resetting the form after submission
		}


	});
	

});