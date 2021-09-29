<?php
 $name = $_POST['name'];
 $visitor_email = $_POST['email'];
 $message = $_POST['message'];

 $email_form = 'benwest0291@outlook.com';

 $email_subject = "Message from Ben West Web Design";

 $email_body = "Name of Contact: $name.\n".
               "Email address: $visitor_email.\n".
                    "Message: $message.\n";


                $to = "info@benwestwebdesign.co.uk";

                $headers = "Form: $email_from \r\n";
                $headers = "Reply-To: $vistitor_email \r\n";
                mail($to,$email_subject,$email_body,$headers);
                header("Location: index.html");
?>
