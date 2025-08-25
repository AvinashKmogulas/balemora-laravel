<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if($_SERVER['REQUEST_METHOD'] === 'POST'){

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    $mail = new PHPMailer(true);
    try {
    //Server settings
        $mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'avinash.mogulas@gmail.com';
        $mail->Password   = 'zoxvksxblcfiqedl';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;
        $mail->isHTML(true);
        $mail->setFrom('avinash.mogulas@gmail.com', 'Belamora');
        if(isset($_POST['form']) && $_POST['form'] == 'bookingForm'){
            $name     = isset($_POST['data']['name']) ? $_POST['data']['name'] : '';
            $phone    = isset($_POST['data']['phone']) ? $_POST['data']['phone'] : '';
            $checkin  = isset($_POST['data']['checkin']) ? $_POST['data']['checkin'] : '';
            $checkout = isset($_POST['data']['checkout']) ? $_POST['data']['checkout'] : '';
            $room     = isset($_POST['data']['room']) ? $_POST['data']['room'] : '';
            $adults   = isset($_POST['data']['adults']) ? $_POST['data']['adults'] : '';
            $children = isset($_POST['data']['children']) ? $_POST['data']['children'] : '';
            $property = isset($_POST['data']['property']) ? $_POST['data']['property'] : '';
            $cottage = isset($_POST['data']['cottage']) ? $_POST['data']['cottage'] : '';

            $mail->Subject = 'New Booking Enquiry';

            // include email template
            ob_start();
            include 'template/booking.php';
            $body = ob_get_clean();

            $mail->Body = $body;

            $mail->addAddress('avinash.k@internetmoguls.com');
            if($mail->send()){
                echo 'Message sent successfully';
            }else{
                echo "Something went wrong";
            }
        }else if(isset($_POST['form']) && $_POST['form'] == 'eventForm'){
            $name     = isset($_POST['data']['name']) ? $_POST['data']['name'] : '';
            $email    = isset($_POST['data']['email']) ? $_POST['data']['email'] : '';
            $phone    = isset($_POST['data']['phone']) ? $_POST['data']['phone'] : '';
            $lawn     = isset($_POST['data']['lawn']) ? $_POST['data']['lawn'] : '';
            $message  = isset($_POST['data']['message']) ? $_POST['data']['message'] : '';
            $property = isset($_POST['data']['property']) ? $_POST['data']['property'] : '';
            
            $mail->Subject = 'New Event Enquiry';

            // include email template
            ob_start();
            include 'template/event.php';
            $body = ob_get_clean();

            $mail->Body = $body;    
            
            $mail->addAddress('avinash.k@internetmoguls.com');
            if($mail->send()){
                echo 'Message sent successfully';
            }else{
                echo "Something went wrong";
            }
        } else if(isset($_POST['form']) && $_POST['form'] == 'contactForm'){
            $name     = isset($_POST['data']['name']) ? $_POST['data']['name'] : '';
            $email    = isset($_POST['data']['email']) ? $_POST['data']['email'] : '';
            $phone    = isset($_POST['data']['phone']) ? $_POST['data']['phone'] : '';
            $subject  = isset($_POST['data']['subject']) ? $_POST['data']['subject'] : '';
            $message  = isset($_POST['data']['message']) ? $_POST['data']['message'] : '';
            $property = isset($_POST['data']['property']) ? $_POST['data']['property'] : '';

            $mail->Subject = 'New Contact Enquiry';

            // include email template
            ob_start();
            include 'template/contact.php';
            $body = ob_get_clean();

            $mail->Body = $body;
            
            $mail->addAddress('avinash.k@internetmoguls.com');
            if($mail->send()){
                echo 'Message sent successfully';
            }else{
                echo "Something went wrong";
            }
        } else if(isset($_POST['form']) && $_POST['form'] == 'offerForm'){
            $name = isset($_POST['data']['name']) ? $_POST['data']['name'] : '';
            $email = isset($_POST['data']['email']) ? $_POST['data']['email'] : '';
            $phone = isset($_POST['data']['phone']) ? $_POST['data']['phone'] : '';
            $offer = isset($_POST['data']['offer']) ? $_POST['data']['offer'] : '';
            $message = isset($_POST['data']['message']) ? $_POST['data']['message'] : '';
            $property = isset($_POST['data']['property']) ? $_POST['data']['property'] : '';

            $mail->Subject = 'New Offer Enquiry';

            // include email template
            ob_start();
            include 'template/offer.php';
            $body = ob_get_clean();

            $mail->Body = $body;
            
            $mail->addAddress('avinash.k@internetmoguls.com');
            if($mail->send()){
                echo 'Message sent successfully';
            }else{
                echo "Something went wrong";
            }
        } else if(isset($_POST['form']) && $_POST['form'] == 'programForm'){
            $name = isset($_POST['data']['name']) ? $_POST['data']['name'] : '';
            $email = isset($_POST['data']['email']) ? $_POST['data']['email'] : '';
            $phone = isset($_POST['data']['phone']) ? $_POST['data']['phone'] : '';
            $program = isset($_POST['data']['program']) ? $_POST['data']['program'] : '';
            $message = isset($_POST['data']['message']) ? $_POST['data']['message'] : '';
            
            $mail->Subject = 'New Wellness Journey Enquiry';

            // include email template
            ob_start();
            include 'template/program.php';
            $body = ob_get_clean();

            $mail->Body = $body;
            
            $mail->addAddress('avinash.k@internetmoguls.com');
            if($mail->send()){
                echo 'Message sent successfully';
            }else{
                echo "Something went wrong";
            }
        }
    }catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}else{
    http_response_code(403);
    echo "Access Denied";
    exit;
}
?>