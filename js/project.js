/**
 * @file    quote.js
 * @brief   Handles sending quotes and scrolling the top navigation.
 * @author  Francis Amankrah (frank@heddoko.com)
 */

// Makes navigation bar opaque when scrolling.
$(window).scroll(function() {
	var scroll = $(window).scrollTop();
	if (scroll >= 220) {
		$('header').addClass('highlight');
	} else {
		$('header').removeClass('highlight');
	}
});

// Quotation form.
$(document).ready(function() {

    // Enable Select2 styling on dropdown
    $('#company_size').select2({
        theme: "bootstrap",
        placeholder: "Company Size",
        allowClear: false,
    });

    // Send a common pageview to GA from the English or French website.
    // ga('send', 'pageview', '/quotation-form-landed');
    $(':input').blur(function() {
        if ($(this).val()) {
            var input_name = $(this).attr('name');
            analytics.track("projectform field filled", {
                name: input_name,
                value: $(this).val()
            });
        }
    });

    // Attach submit listener to form.
    $(document.quotation).on('submit', function(event) {
        event.preventDefault();

        // Disable form fields.
        $(this).find('.form-control').prop('disabled', true);

        // Split the name
        var name = this.full_name.value;
        var first_name = name.substr(0, name.lastIndexOf(" "));
        var last_name = name.substr(name.lastIndexOf(" "), name.length);
        console.log("first_name", first_name);
        console.log("last_name", last_name);

        // Validate phone #.
        var phone = this.phone.value.replace(/([^0-9])/g, '');
        if (phone.length > 0 && phone.length < 6)
        {
            $(this).find('.form-control').prop('disabled', false);
            $(this.phone).parent().find('.error').slideDown();

            return false;
        }

        // Slide out form and show loading animation.
        $(this).slideUp(500);
        $('.ajax').show();

        // Send virtual pageview & tracking event to GA.
        // ga('send', 'pageview', '/quotation-form-sending');
        // ga('send', 'event', 'RFQ', 'Submitted');
        // Format request data and send request.
        var email = this.email.value;
        var organization = this.organization.value;
        var title = this.title.value;
        var website = this.website.value;
        var application = this.application.value;
        // If #from___ anchor is set, track it!
        if(window.location.hash) {
            var hash = window.location.hash;
            var referring_btn = hash.split("#from")[1];
        }

        $.ajax({
            type: 'POST',
            cache: false,
            url: $(this).attr('action'),
            data: {
                first_name: first_name,
                last_name: last_name,
                organization: this.organization.value,
                title: this.title.value,
                phone: this.phone.value,
                email: this.email.value,
                website: this.website.value,
                application: this.application.value,
                token: this.token.value
            },
            complete: function(response) {

                $('.ajax').hide();

                // Make sure request was successful.
                if (response.status != 201) {
                    $('.errormessage').show();
                    console.log('Error: ' + response.responseText);
                }

                else {
                    // Track event with Segment.io
                    analytics.identify({
                        name: name,
                        email: email,
                        organization: organization,
                        title: title,
                        phone: phone,
                        website: website,
                        application: application
                    });
                    analytics.track("projectform submitted", {
                        name: name,
                        email: email,
                        organization: organization,
                        title: title,
                        phone: phone,
                        website: website,
                        application: application,
                        referring_btn: referring_btn
                    });
                    $('.successmessage').show();
                    console.log(response.responseText);

                    // Send virtual pageview to GA.
                    // ga('send', 'pageview', '/quotation-form-sent');
                }
            }
        });

        return false;
    });
});
