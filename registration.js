$('#go').click(function(){
	var fname = $('#first_name').val();
	var lname = $('#last_name').val();
	var phone = $('#phone').val();
	var email = $('#email').val();
	var roll = $('#roll').val();
	var sec = $('#Sec').val();
	var role = $('#Role').val();
	
	$.post('reg.php',{fname:first_name, lname:last_name, phone:phone, email:email, roll:roll, sec:Sec, role:Role}, function(ret){
		$('#result').html(ret); //the status which is returned by php will be displayed above register submit
	});
});
