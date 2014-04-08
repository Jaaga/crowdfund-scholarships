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


////////
//When submit button clicks, error will be shown. 

		$('#submitButton').on('click', function(e){
			e.preventDefault();
			var email = $('#email').val();
			var password = $('#password').val();
			var repeatpassword = $('#repeatpassword').val();

			if(!email) {
				alert('Please enter an email');
				return;
			}
			var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			if(re.test(email)) {
				alert('Please enter a valid email');
				return;
			}
			if (!password) {
				alert('Please enter password');
				return;
			}

			if(password.length < 6) {
				alert('Please enter a password with more than 6 characters');
				return;
			}

			if(password !== repeatpassword) {
				alert('Passwords do not match');
				return;
			}

			$('form').submit();
		});