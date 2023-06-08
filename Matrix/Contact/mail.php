<?php

// Using $_POST function to send data 

// isset() function used to check if submit button is clicked

if (isset($_POST['submit'])) {

    // Grabbing elements by targeting 'name' attribute
    $name = $_POST['name'];
    $email = $_POST['emailAddress'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $recipient = "mhjnieuwenburg@gmail.com";

    // using empty() function to check if fields are empty

    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        // Changing URL 
        //header("Location: index.php?form=empty");
        echo "Please fill in any missing fields!";
    } else {

        // Checking if email is valid with filter_var() function 
        // FILTER_VALIDATE_EMAIL used as parameter to check email validity

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            //header("Location: index.php?invalidemail");
            echo "Please enter a valid email address.";
        }
        // Send the email if no errors are found
        else {

            // mail() function allows for the sending of emails
            // Three parameters must be passed for the mail() function to work.
            // 1. Email address of the recipient
            // 2. The subject line of the email
            // 3. The message

            mail($recipient, $subject, $message);


            header("Location: index.php?mailsend");
        }
    }
}
