$(function() {
    // use form.
    var form = $('#contactForm');

    // use message display div.
    var formMessages = $('#success');

    //set up listner
    $(form).submit(function(event) {
    // submitting is stopped
    event.preventDefault();
	}); //end of listner

	var formData = $(form).serialize();

// Submit the form using AJAX.
		$.ajax({
		    type: 'POST',
		    url: $(form).attr('action'),
		    data: formData

		});


	.fail(function(data) {
    // Make sure that the formMessages div has the 'error' class.
    $(formMessages).removeClass('success');
    $(formMessages).addClass('error');

    // Set the message text.
    if (data.responseText !== '') {
        $(formMessages).text(data.responseText);
    } else {
        $(formMessages).text('Oops! An error occured and your message could not be sent.');
    }
});
});




