<?php	


	try {
        $name_42718 = $_POST['name_42718'];
        $email_42718 = $_POST['email_42718'];
        $message_42718 = $_POST['message_42718'];
        $optin_42718 = $_POST['optin_42718'];

        $to = 'laura.kong@integrityxd.com'; // Email submissions are sent to this email

        // Create email
        $email_subject = "Message from Squad of Bulldogs";
        $email_body = "You have received a new message. \n\n".
            "Name_42718: $name_42718 \nEmail_42718: $email_42718 \nMessage_42718: $message_42718 \nOptin_42718: $optin_42718 \n";
        $headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";
        $headers .= "From: contact@sob.dog\n";
        $headers .= "Reply-To: $email_42718";

        mail($to,$email_subject,$email_body,$headers); // Post message
        echo json_encode(array("message"=> "Send Successfully!", "email"=>$email_42718));
        header('HTTP/1.1 200 OK');
        return true;
    } catch (Exception $e) {
        $json = json_encode( $e );
        file_put_contents( ABSPATH . '/connection_failure.json', $json);
    }
?>