<?php
 $name = $_post['name'];
 $visitor_email = $_POST['email'];
 $message = $_POST['message'];

 $email_form = 'benwest0291@outlook.com';

 $email_subject = "New Form Submission";

 $email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
                    "User Message: $message.\n";


                $to = "info@benwestwebdesign.co.uk";

                $headers = "Form: $email_from \r\n";
                $headers = "Reply-To: $vistitor_email \r\n";
                mail($to,$email_subject,$email_body,$headers);
                header("Location: index.html");
?>
