<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function sendMail(Request $request)
    {
        /* Configuration */
        /*your web-mail*/
        $mailto = 'yasin@sandofvega.com';


        $name = $request->get('first_name');
        $sub = $request->get('sub');
        $email = $request->get('email');
        $comments = $request->get('message');

// HTML for email to send submission details
        $body = "
                <p>
                    <b>Message</b>: $comments
                </p>
                <p>
                    <b>Name</b>: $name <br>
                    <b>Email</b>: $email
                </p>
                ";


// Success Message
        $success = "Sent";
        $error = "Failed";


        $headers = "From: $name <$email> \r\n";
        $headers .= "Reply-To: $email \r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $message = "<html><body>$body</body></html>";

        if (empty($name) || empty($sub) || empty($email) || empty($comments)) {

            echo "Fill The Form Properly"; // message
            header("Location:" . url('/')); //go to home page
            die();

        } else {

            if (mail($mailto, $sub, $message, $headers)) {
                echo "$success"; // success
            } else {
                echo "$error"; // failure
            }
        }
    }
}
