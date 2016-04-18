/* =====================================================================
NAV BACKGROUND SCROLLING
===================================================================== */
$(window).scroll(function() {
	var scroll = $(window).scrollTop();
	if (scroll >= 220) {
		$('header').addClass('highlight');
			} else {
		$('header').removeClass('highlight');
	}
});

/* =====================================================================
SLIDER
===================================================================== */
$(document).ready(function() {
	"use strict";

	// Enable Select2
	$('#mce-MMERGE3').select2({
	    theme: "bootstrap",
	    placeholder: "Profession",
	    allowClear: false,
	    width: "resolve"
	});
	$('#mce-MMERGE3').on("select2:select", function(e) {
	    //Do stuff
	    analytics.track("signupform field filled", {
	        name: "profession",
	        value: $(this).val()
	    });
	});

});

/* =====================================================================
VALIDATE EMAIL
===================================================================== */
function validateEmailFunc(email) {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
}

/* =====================================================================
FORM LIGHTBOX
===================================================================== */
$(document).ready(function(){

	$(':input').blur(function() {
	    if ($(this).val()) {
	        var input_name = $(this).attr('name');
	        analytics.track("signupform field filled", {
	            name: input_name,
	            value: $(this).val()
	        });
	    }
	});

	$('#mc-embedded-subscribe-form').submit(function(e){
		e.preventDefault();
		$('#mc-embedded-subscribe-form input').addClass('disabled').attr('disabled', 'disabled');
		$('#mc-embedded-subscribe-form select').addClass('disabled').attr('disabled', 'disabled');
		$('#thankyoudiv').html('').hide();
		$('.ajax').hide();

		var validateFullName = false;
		var validateEmail = false;
		var validateProfession = false;

		//validate email
		if($('#mce-EMAIL').val() == '' || $('#mce-EMAIL').val() == null || $('#mce-EMAIL').val() == undefined || !validateEmailFunc( $('#mce-EMAIL').val() )) {
			validateEmail = true;
		}

		if($('#mce-FNAME').val() == '' || $('#mce-FNAME').val() == null || $('#mce-FNAME').val() == undefined) {
			validateFullName = true;
		}

		if($('#mce-MMERGE3').val() == '' || $('#mce-MMERGE3').val() == null || $('#mce-MMERGE3').val() == undefined) {
			validateProfession = true;
		}

		if(!validateFullName &&
			!validateEmail &&
            !validateProfession) { //ALL GOOD

			console.log($('#mce-EMAIL').val());
			console.log($('#mce-FNAME').val());
			console.log($('#mce-MMERGE3').val());

			// Split the name
			var name = $('#mce-FNAME').val();
			var pos_space = name.lastIndexOf(" ");
			var first_name;
			var last_name;
			if (pos_space > 0) {
				first_name = name.substr(0, name.lastIndexOf(" "));
				last_name = name.substr(name.lastIndexOf(" "), name.length);
			} else {
				first_name = name;
				last_name = "";
			}
			console.log("first_name", first_name);
			console.log("last_name", last_name);

			var email = $('#mce-EMAIL').val();
			var profession = $('#mce-MMERGE3').val();
			// If #from___ anchor is set, track it!
			if(window.location.hash) {
				var hash = window.location.hash;
				var referring_btn = hash.split("#from")[1];
			}

			$('.ajax').show();

			$.ajax({
		        type: $('#mc-embedded-subscribe-form').attr('method'),
		        url: $('#mc-embedded-subscribe-form').attr('action'),
		        data: { EMAIL: $('#mce-EMAIL').val(),
		        FNAME: first_name,
		        LNAME: last_name,
		        MMERGE3: $('#mce-MMERGE3').val() },
		        cache       : false,
		        dataType    : 'json',
		        contentType: "application/json; charset=utf-8",
		        error       : function(err) { alert('Could not connect to the registration server. Please try again later.'); },
		        success     : function(data) {
		            if (data.result != 'success') {
						// Something went wrong, do something to notify the user. maybe alert(data.msg);

						$('#mc-embedded-subscribe-form input').removeClass('disabled').removeAttr('disabled');
						$('#mc-embedded-subscribe-form select').removeClass('disabled').removeAttr('disabled');
						$('.ajax').hide();
						$('#thankyoudiv').html(data.msg).show();

						// ga('send', 'event', 'mailchimp_server', 'mailchimp_server_response', 'sign_up_failed');
						// mixpanel.track('sign_up_failed');

		            } else {
		                // It worked, carry on...
		                $('#mc-embedded-subscribe-form input').val('');
		                $('#mc-embedded-subscribe-form select').val('');
						$('#mc-embedded-subscribe-form input').removeClass('disabled').removeAttr('disabled');
						$('#mc-embedded-subscribe-form select').removeClass('disabled').removeAttr('disabled');
						$('.ajax').hide();
						$('#thankyoudiv').html('Thank You').show();

						// ga('send', 'event', 'mailchimp_server', 'mailchimp_server_response', 'user_signed_up');
						// mixpanel.track('user_signed_up');
						analytics.identify({
						    name: name,
						    email: email,
						    profession: profession,
						});
						analytics.track("Newsletter signup", {
						    name: name,
						    email: email,
						    profession: profession,
						    referring_btn: referring_btn
						});
		            }
		        }
		    });


		} else { //VALIDATE ERRORS
			$('#mc-embedded-subscribe-form input').removeClass('disabled').removeAttr('disabled');
			$('#mc-embedded-subscribe-form select').removeClass('disabled').removeAttr('disabled');
			$('.ajax').hide();

            console.log('validate errors');

			if(validateProfession) {
				$('#thankyoudiv').html('Please select a profession');
			}

			if(validateFullName) {
				$('#thankyoudiv').html('Please enter your full name');
			}

			if(validateEmail) {
				$('#thankyoudiv').html('Please enter a valid email address');
			}

			$('#thankyoudiv').show();
		}

		return false;
	});

});
