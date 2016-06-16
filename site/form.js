/* Attach a submit handler to the form */
$("#contactForm").submit(function(event) {
     var ajaxRequest;

    /* Stop form from submitting normally */
    event.preventDefault();

    /* Clear result div*/
    $("#sucess").html('');

    /* Get from elements values */
    var values = $(this).serialize();

  
       ajaxRequest= $.ajax({
            url: "check.php",
            type: "post",
            data: values
        });

      /*  request cab be abort by ajaxRequest.abort() */

     ajaxRequest.done(function (response, textStatus, jqXHR){
          // show successfully for submit message
          $("#sucess").html('Submitted successfully and displayed using ajax');
     });

     /* On failure of request this function will be called  */
     ajaxRequest.fail(function (){

       // show error
       $("#sucess").html('There is error while submit');
     });






// $(function() {
//     // use form.
//     var form = $('#contactForm');

//     // use message display div.
//     var formMessages = $('#success');

//     //set up listner
//     $(form).submit(function(event) {
//     // submitting is stopped
//     event.preventDefault();
// 	}); //end of listner

// 	var formData = $(form).serialize();

// // Submit the form using AJAX.
// 		$.ajax({
// 		    type: 'POST',
// 		    url: $(form).attr('action'),
// 		    data: formData

// 		});


// 	.fail(function(data) {
//     // Make sure that the formMessages div has the 'error' class.
//     $(formMessages).removeClass('success');
//     $(formMessages).addClass('error');

//     // Set the message text.
//     if (data.responseText !== '') {
//         $(formMessages).text(data.responseText);
//     } else {
//         $(formMessages).text('Oops! An error occured and your message could not be sent.');
//     }
// });
// });




