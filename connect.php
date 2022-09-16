<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
     $conn=mysqli_connect('localhost','root','','sign_in_db') or die("Connection Failed:" .mysqli_connect_error());
if(isset($_POST['name']) && isset($_POST['company']) && isset($_POST['contact']) && isset($_POST['email']) && isset($_POST['product']) && isset($_POST['city']) && isset($_POST['country']) && isset($_POST['remark'])){
  $name= $_POST['name'];
  $company= $_POST['company'];
  $contact= $_POST['contact'];
  $email= $_POST['email'];
  $product= $_POST['product'];
  $city= $_POST['city'];
  $country= $_POST['country'];
  $remark= $_POST['remark'];
  $msg="";
  $msg2="";
  $msg3="";


  $check=mysqli_num_rows(mysqli_query($conn,"select * from users where email='$email'"));
           if($check>0){
  
         $msg="Sent unsuccessful. Email id already present, please try different email id.";
         }else{
         
    $sql="INSERT INTO `users` (`name`, `company`,`contact`, `email`, `product`,`city`,`country`,`remark`) VALUES ('$name', '$company', '$contact', '$email','$product','$city','$country','$remark')";

    $query=mysqli_query($conn,$sql);
       
    if($query){
                  $msg3="Entry Successfull";
              }
              else{
              $msg3="Error Occured";
              }


require 'vendor/autoload.php';

$mail = new PHPMailer(true);




  

try {
   
   
    $mail->SMTPDebug =0;                      
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'smtp0121@gmail.com';                     
    $mail->Password   = 'kbhzzedwnnxvvwpm';                      
    $mail->SMTPSecure ="tls";            
    $mail->Port       = 587;                                    

    $mail->setFrom('smtp0121@gmail.com', 'Signup User');
    $mail->addAddress('prancesxary@gmail.com', );     
   
 


$details="<br>Name: " . $name."<br> Company: ".$company."<br>Contact: ".$contact."<br> Email: ".$email."<br>Product: ".$product."<br>City: ".$city."<br>Country: ".$country."<br>Remark: ".$remark ;
    $mail->isHTML(true);     
                             
    $mail->Subject = 'Signup User Database';
    $mail->Body    =$details;
    $mail->AltBody = strip_tags($details);

    $mail->send();
    $msg2= '<br>Message has been sent';
} catch (Exception $e) {
    $msg2 ="<br>Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

}
         }
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="./style1.css" />

</head>
<body>
    <div class="main">
        <div class="msg">
    <?php 
     echo $msg3."<br>";
     ?>   
    <?php 
     echo $msg2;
     ?>   
   <?php 
     echo $msg;
     ?></div>
     <div class="button1">
     <button><a href="index.php">GO BACK</a></button>
</div>
     </div>
</body>
</html>