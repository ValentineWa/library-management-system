<?php 
            // Proccess at only POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // name of sender
    $fullname = strip_tags(trim($_POST["fullname"]));
     
   // Email of sender
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

     
    // Sender subject
    $phone = strip_tags(trim($_POST["phone"]));
     
    // Sender Message
    $textarea = trim($_POST["textarea"]);
     
    // Your email where this email will be sent
    $your_email = "waweruval@gmail.com";
    //Your site name for identify
   $your_site_name = "igac.org";
     
    // Build email subject
    $email_subject = "[{$your_site_name}] New Message by {$fullname}";
     
    // Build Email Content
    $email_content = "Name: {$fullname}\n";
    $email_content .= "Email: {$email}\n";
    $email_content .= "TelNo: {$phone}\n";
    $email_content .= "Message: {$textarea}\n";
    // Build email headers
    $email_headers = "From: {$fullname} <{$email}>";
     
    // Send email
    $send_email = mail($your_email, $email_subject, $email_content, $email_headers);
     
    // Check email sent or not
    if($send_email){
        // Send a 200 response code.
        http_response_code(200);
        echo "Thank You! Your message has been sent.";
    } else {
       // Send a 500 response code.
        http_response_code(500);
        echo "Oops! we couldn't send your message. Please try again later";
    }
} 
?> 
<?php 
            // Proccess at only POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // name of sender
    $firstname = strip_tags(trim($_POST["firstname"]));
    $othername = strip_tags(trim($_POST["othername"]));
     
   // Email of sender
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

     
    // Sender subject
    $phone = strip_tags(trim($_POST["phone"]));
    $location = strip_tags(trim($_POST["location"]));
    $age = strip_tags(trim($_POST["age"]));
    $optradios = strip_tags(trim($_POST["optradios"]));
    $optradio = strip_tags(trim($_POST["optradio"]));
    // Sender Message
    $textarea = trim($_POST["message"]);
     
    // Your email where this email will be sent
    $your_email = "waweruval@gmail.com";
    //Your site name for identify
   $your_site_name = "igac.org";
     
    // Build email subject
    $email_subject = "[{$your_site_name}] New Message by {$firstname}";
     
    // Build Email Content
    $email_content = "Name: {$firstname}\n";
    $email_content = "Name: {$othername}\n";
    $email_content .= "Email: {$email}\n";
    $email_content .= "TelNo: {$phone}\n";
    $email_content = "Location: {$location}\n";
    $email_content = "Age: {$age}\n";
    $email_content = "Gender: {$optradios}\n";
    $email_content = "Marital Status: {$optradio}\n";
    $email_content .= "Message: {$message}\n";
    // Build email headers
    $email_headers = "From: {$firstname} <{$email}>";
     
    // Send email
    $send_email = mail($your_email, $email_subject, $email_content, $email_headers);
     
    // Check email sent or not
    if($send_email){
        // Send a 200 response code.
        http_response_code(200);
        echo "Thank You! Your message has been sent.";
    } else {
       // Send a 500 response code.
        http_response_code(500);
        echo "Oops! we couldn't send your message. Please try again later";
    }
} 
?> 
<?php 
            // Proccess at only POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // name of sender
    $firstname = strip_tags(trim($_POST["firstname"]));
    $othername = strip_tags(trim($_POST["othername"]));
     
   // Email of sender
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

     
    // Sender subject
    $phone = strip_tags(trim($_POST["phone"]));
    $member = strip_tags(trim($_POST["member"]));
    $optradios = strip_tags(trim($_POST["optradios"]));

    // Sender Message
    $textarea = trim($_POST["message"]);
     
    // Your email where this email will be sent
    $your_email = "waweruval@gmail.com";
    //Your site name for identify
   $your_site_name = "igac.org";
     
    // Build email subject
    $email_subject = "[{$your_site_name}] New Message by {$firstname}";
     
    // Build Email Content
    $email_content = "Name: {$firstname}\n";
    $email_content = "Name: {$othername}\n";
    $email_content .= "Email: {$email}\n";
    $email_content .= "TelNo: {$phone}\n";
    $email_content = "Member: {$member}\n";
    $email_content = "Gender: {$optradios}\n";
    $email_content .= "Message: {$message}\n";
    // Build email headers
    $email_headers = "From: {$firstname} <{$email}>";
     
    // Send email
    $send_email = mail($your_email, $email_subject, $email_content, $email_headers);
     
    // Check email sent or not
    if($send_email){
        // Send a 200 response code.
        http_response_code(200);
        echo "Thank You! Your message has been sent.";
    } else {
       // Send a 500 response code.
        http_response_code(500);
        echo "Oops! we couldn't send your message. Please try again later";
    }
} 
?> 

