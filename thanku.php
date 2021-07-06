<!-- <h1>Thank you</h1> -->
<?php 
// $to = "khokanpaul408@gmail.com";
// $subject = "Response from website";
// $message = "I am very thankful to you";
// $sender = "From: khokanpaul408@gmail.com";

// if(mail($to, $subject, $message, $sender)){
//     echo"Mail send Succcessfully";
// }
//     else{
//         echo"can not send mail";
//     }

// the message

// $to      = 'khokanpaul408@gmail.com';
// $subject = 'the subject';
// $message = 'hello';
// $headers = 'From: khokanpaul408@gmail.com' . "\r\n" .
//     'Reply-To: khokanpaul408@gmail.com' . "\r\n" .
//     'X-Mailer: PHP/' . phpversion();
// $headers .= "MIME-Version: 3.2.2" . "\r\n";
// //$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// mail($to, $subject, $message, $headers);




?>

 <html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
         $to = "khokanpaul408@gmail.com";
         $subject = "This is subject";
         
         $message = "<b>Donate</b>";
         $message .= "<h1>Payment Successfully. Thank you</h1>";
         
         $header = "From:khokanpaul408@gmail.com \r\n";
         $header .= "Cc:khokanpaul408@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?> 
      
   </body>
</html>

