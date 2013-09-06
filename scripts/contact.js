$(function() {
	// Validate the contact form
  $('#contactform').validate({
  	// Specify what the errors should look like
  	// when they are dynamically added to the form
  	errorElement: "div",
  	errorPlacement: function(error, element) {
  		error.insertAfter(element);
  	},
  	
  	// Add requirements to each of the fields
  	rules: {
  		name: {
  			required: true,
  			minlength: 2
  		},
  		email: {
  			required: true,
  			email: true
  		},
  		message: {
  			required: true,
  			minlength: 10
  		}
  	},
  	
  	// Specify what error messages to display
  	// when the user does something horrid
  	messages: {
  		name: {
  			required: "Vänligen fyll i ditt namn.",
  			minlength: jQuery.format("Minst {0} bokstäver behövs.")
  		},
  		email: {
  			required: "Vänligen fyll i din e-post.",
  			email: "Fel format på din e-post."
  		},
  		message: {
  			required: "Vänligen fyll i ett meddelande.",
  			minlength: jQuery.format("Minst {0} bokstäver behövs.")
  		}
  	},
  	
  	// Use Ajax to send everything to processForm.php
  	submitHandler: function(form) {
  		$("#send").prop("value", "Skickar...");
		$("#send").prop("disabled", true);
  		$(form).ajaxSubmit({
  			success: function(responseText, statusText, xhr, $form) {
  				$(form).slideUp("fast");
  				$("#response").html(responseText).hide().slideDown("fast");
  			}
  		});
  		return false;
  	}
  });
});