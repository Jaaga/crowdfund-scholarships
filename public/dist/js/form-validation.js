//Check for AlphaNumeric Password
	function checkForAdequatePassword(password) {
		var min = 6;
		var number = false;
		var length = false;
		for(var i = 0; i < password.length; i++) {
			var number = parseInt(password[i]);
			console.log(number);
			if(typeof(number) === 'number' && (number >=0 || number <= 9)) {
				number = true;
			}
		}
		if (password.length >= min) {
			length = true;
		}
		var obj = {
			errors : []
		};
		if(number && length) {
			obj.success = true;
			return obj;
		}
		if(!length) {
			obj.errors.push('formErrorPasswordLength');
		}
		if(!number) {
			obj.errors.push('formErrorPasswordNumber');
		}
		return obj;
	}
    //When submit button clicks, error will be shown. 

	$('#submitButton').on('click', function(e){
		e.preventDefault();
	//Showing Error for Username

		var username = $('#username').val();
		if(!username) {
			$('#formErrorBox').fadeIn();
			return;
		}
        //Showing Error for Password if it is not filled

		var password = $('#password').val();
		if (!password) {
			$('#formErrorPassword').fadeIn();
			return;
		}
		// Further validations for checking the Password.
		var validated = checkForAdequatePassword(password);
		console.log(validated);
		if(typeof validated.success === 'undefined') {
			for(var i = 0; i < validated.errors.length; i++) {
				$('#' + validated.errors[i]).fadeIn();
			}
			return;
		}
		//checking if the password is same
		if (password != $('#repeatpassword').val()) {
			$('#formErrorPasswordMismatch').fadeIn();
			return;
		}
		$('form').submit();
	});
