$(function(){
	$('#go').click(function(){
		var fname = $('#first_name').val();
		var lname = $('#last_name').val();
		var phone = $('#phone').val();
		var email = $('#email').val();
		var roll = $('#roll').val();
		var sec = $('#Sec').val();
		var role = $('#Role').val();

		if(!fname || !lname || !phone || !email || !roll){
			alert('Fill the entire form please');
		}else{
			$.post('reg.php',{first_name:fname, last_name:lname, phone:phone, email:email, roll:roll, Sec:sec, Role:role}, function(ret){
				$('#result').html(ret); //the html text which is returned by php will be displayed above register submit
			});
			
			$('.form-control').val(''); //resetting the form after submission
		}


	});

	$('#no').click(function(){
		$('.form-control').val('');
	});

	

});