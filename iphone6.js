$(document).ready(function(){
		// alert('start');
// 		var request;

// 		$("#foo").submit(function(event){

//     // Abort any pending request
//     if (request) {
//         request.abort();
//     }
//     // setup some local variables
//     var $form = $(this);

//     // Let's select and cache all the fields
//     var $inputs = $form.find("input, select, button, textarea");

//     // Serialize the data in the form
//     var serializedData = $form.serialize();


//     // Let's disable the inputs for the duration of the Ajax request.
//     // Note: we disable elements AFTER the form data has been serialized.
//     // Disabled form elements will not be serialized.
//     $inputs.prop("disabled", true);

//     // Fire off the request to /form.php
//     request = $.ajax({
//         url: "iphone6.php",
//         type: "post",
//         data: serializedData,
//         function(data) {
//         $("#div2").html(
//           "Favorite beverage: " + data["favorite_beverage"] + "<br />Favorite restaurant: " + data["favorite_restaurant"] + "<br />Gender: " + data["gender"] + "<br />JSON: " + data["json"]
//         );

//         alert("Form submitted successfully.\nReturned json: " + data["json"]);
//       }
//     });

//     // Callback handler that will be called on success
//     request.done(function (response, textStatus, jqXHR){
//         // Log a message to the console
//         console.log("Hooray, it worked!");
//     });

//     // Callback handler that will be called on failure
//     request.fail(function (jqXHR, textStatus, errorThrown){
//         // Log the error to the console
//         console.log("Hooray, did not worked!");
//     });

//     // Callback handler that will be called regardless
//     // if the request failed or succeeded
//     request.always(function () {
//         // Reenable the inputs
//         $inputs.prop("disabled", false	);
//     });

//     // Prevent default posting of form
//     event.preventDefault();
// });


		
    // Get the form.
    var form = $('#formiphone');

    // Get the messages div.
    var formMessages = $('#div2');

    // TODO: The rest of the code will go here...
		

		$(form).submit(function(event) {

		// Serialize the form data.
		var formData = $(form).serialize();

		$.ajax({
	    type: 'POST',
	    url: $(form).attr('action'),
	    data: { formData : formData, success : "success" }
	    // data: formData

		}).done(function(response) {
    // Make sure that the formMessages div has the 'success' class.
    $(formMessages).removeClass('error');
    $(formMessages).addClass('success');

    // Set the message text.
    $(formMessages).html(response);

    // // Clear the form.
    // $('#name').val('');
    // $('#email').val('');
    // $('#message').val('');
		}).fail(function(data) {
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

    // Stop the browser from submitting the form.
    event.preventDefault();
    // TODO
		});



    $("form").submit(function(){

    	var errors = [];

      $title = $("#title").val();
      if(jQuery.inArray($title , ["Mr", "Ms", "Mrs", "None"]) == -1){
        errors.push("invalid title");
    	}

    	$firstname = $("#firstname").val();
    	if (!validateLetter($firstname)){
    		errors.push("invalid firstname (only characters)");
    	}

    	$lastname = $("#lastname").val();
    	if (!validateLetter($lastname)){
    		errors.push("invalid lastname (only characters)");

    	}

    	$email = $("#email").val();
    	if(!validateEmail($email)){
    		errors.push("invalid email");
    	}

    	$phone = $("#phone").val();
    	if(!validateNumber($phone) || $phone.length < 10){
    		errors.push("invalid phone");
    	}

    	 $("#div1").empty();
    	if(errors.length){
    		var list = document.createElement("ul");

    		errors.forEach(function(entry) {
	    		var item = document.createElement("li");
	    		list.appendChild(item)
					var node = document.createTextNode(entry);
					item.appendChild(node);
				});

				var element = document.getElementById("div1");
				element.appendChild(list);

    		return false
    	}

    });
});

function validateLetter(inputtxt){ 
  var letters = /^[A-Za-z]+$/;
  return letters.test(inputtxt)
}

function validateNumber(inputtxt){ 
  var letters = /^[0-9]+$/;
  return letters.test(inputtxt)
}

function validateEmail(email) {
  var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
  return re.test(email);
}
