
<?php 
if(isset($_POST['submit'])){
    $to = "imshubhamy@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $subject = "Contact form submission";
    $subject2 = "Copy of your contact form submission of SMEC";
    $message = " Name :" . $name . " \n Phone no.: " . $phone . "\n Email: " . $email . " \n City: " . $city . "Country " . $country . " \n Message:" . "\n \n" . $_POST['message'];
    $message2 = "Here is a copy of your message \n Name :" . $name . " \n Phone no.: " . $phone . "\n Email:" . $email . " \n City: " . $city ."Country " . $country . " \n Message:" . "\n \n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>

 <html>
    <head></head>
    <body>
    <a href="index.html"> Click here to go back to Homepage</a>
    </body>
    </html