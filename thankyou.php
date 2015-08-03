<?php
 // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $title = strip_tags(trim($_POST["title"]));
       
        // Get the form fields and remove whitespace.
        $success = $_POST['success'];
        $firstname = strip_tags(trim($_POST["firstname"]));
        $firstname = str_replace(array("\r","\n"),array(" "," "),$firstname);

        $lastname = strip_tags(trim($_POST["lastname"]));
        $lastname = str_replace(array("\r","\n"),array(" "," "),$lastname);

        $phone = strip_tags(trim($_POST["phone"]));

        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

        $comment = trim($_POST["comment"]);

        // Check that data was sent to the mailer.
        if ( empty($title) || empty($firstname) || empty($lastname) ||  empty($phone) || empty($email) || $success=="success") {
            // Set a 400 (bad request) response code and exit.
            // http_response_code(400);
            echo "<div class='thank_you'>";
                echo "<p class = 'error'>Oops! There was a problem with your submission. Please complete the form and try again.</p>";
            echo "</div>";

            exit;
        }

        // Set the recipient email address.
        $recipient = "kasiarakos@windowslive.com";

        // Set the email subject.
        $subject = "iphone 6 interest from $firstname";

        // Build the email content.
        $email_content = "";
        if($title != "None"){
            $email_content  .= "$title";
        }
        $email_content .= " $firstname $lastname is interested to buy a new Iphone 6 \n";
        $email_content .= "you can contact in $phone or $email \n\n";
        $email_content .= "Message: \n$comment\n";







        // Build the email headers.
        $email_headers = "From: $firstname <$email>";

        // Send the email.


        // if (mail($recipient, $subject, $email_content, $email_headers)) {
        if(false){
            // Set a 200 (okay) response code.
            // http_response_code(200);
            echo "<div class='thank_you'>";
                echo "<h2> Thank you for your Interest </h2>";
                echo "<p> your email has been sent and we will contact with you the next few days </p>";

                echo "<h5> Details </h5>";
                echo "<table>";
                    echo "<tr><td>Firstname: </td><td>$firstname</td></tr>";
                    echo "<tr><td>Lastname: </td><td>$lastname</td></tr>";
                    echo "<tr><td>Email: </td><td>$email</td></tr>";
                    echo "<tr><td>Phone: </td><td>$phone</td></tr>";
                echo "</table>";


            echo "</div>";
        } else {
            // Set a 500 (internal server error) response code.
            // http_response_code(500);
            echo "<div class='thank_you'>";
                echo "<h2 class = 'error'> Oops! Something went wrong and we couldn't send your message. </h2>";
            echo "</div>";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        // http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }
?>