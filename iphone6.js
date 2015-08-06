$(document).ready(function(){

  var request;

  // Get the form.
  var form = $('#formiphone');

  // Get the messages div.
  var formMessages = $('#div2');

	// get the submition of the form.
	$(form).submit(function(event) {

    //array of input errors.
  	var errors = [];


    $("#div2").empty();


    //clear the asterisks and starts validation of input.
  	$(".error_asterisk").empty();

    $title = $("#title").val();
    if(jQuery.inArray($title , ["Mr", "Ms", "Mrs", "None"]) == -1){
      errors.push("invalid title");
  	}

  	$firstname = $("#firstname").val();
  	if (!validateLetter($firstname)){
  		// $("#name_error").removeClass("hidden");
  		$("<span class='error_asterisk'>*</span>").insertAfter("#firstname");
  		errors.push("invalid first name (only characters)");
  	}

  	$lastname = $("#lastname").val();
  	if (!validateLetter($lastname)){
    	$("<span class='error_asterisk'>*</span>").insertAfter("#lastname");
    	errors.push("invalid last name (only characters)");
  	}

  	$email = $("#email").val();
  	if(!validateEmail($email)){
  		$("<span class='error_asterisk'>*</span>").insertAfter("#email");
  		errors.push("invalid email");
  	}

  	$phone = $("#phone").val();
  	if(!validateNumber($phone) || $phone.length < 10){
  		$("<span class='error_asterisk'>*</span>").insertAfter("#phone");
  		errors.push("invalid phone");
  	}

    

  	// Serialize the form data.
  	if (errors.length>0){
  		var formData = "unsucess";
  	}else{
  		var formData = $(form).serialize();
  	}

    var $ajaxsuccess = true;

  	request = $.ajax({
      type: 'POST',
      url: $(form).attr('action'),
      data: formData
  	});


  	request.done(function(response) {
      // Make sure that the formMessages div has the 'success' class.
      $(formMessages).removeClass('error');
      $(formMessages).addClass('success');

      // Set the message text.
      $(formMessages).html(response);
  	})

  	request.fail(function(data) {
      $ajaxsuccess = false;

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

    $("#div1").empty();
  	if(errors.length>0){
  		var list = document.createElement("ul");

  		errors.forEach(function(entry) {
    		var item = document.createElement("li");
    		list.appendChild(item)
  			var node = document.createTextNode(entry);
  			item.appendChild(node);
  		});

  		var element = document.getElementById("div1");
  		element.appendChild(list);
  	}
    else{
      // save to google doc only if ajax call was successW
      if($ajaxsuccess){
        postToGoogle();
        $("#form_container").hide();
      }
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

function postToGoogle() {
  $.ajax({
    url: "https://docs.google.com/forms/d/1xM9bsrcAPkn_JNtqcPjsSB2-AG_9hP1_XwRv31yeZpo/formResponse",
    data: {"entry.294582486": $("#title").val(), "entry.147217157": $("#firstname").val(), "entry.2109413729": $("#lastname").val(), "entry.1268817942": $("#email").val(), "entry.1219073050": $("#phone").val(), "entry.1587645061": $("#comment").val()},
    type: "POST",
    dataType: "xml"
  });
}