<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendoremail/autoload.php';

require_once "class-db.php";
$dbHost     = "127.0.0.1:28893";
//$dbHost     = "localhost";
  $dbUsername = "ifixdev";
     $dbPassword = "VjF2JQ@!jGZx5v0c";
   $dbName     = "mosquee";


   

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if($conn->connect_error){
    die("Failed to connect with MySQL: " . $conn->connect_error);
}else{
    //$this->db = $conn;
}





$email=$_POST['email3'];  
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone3'];
$name=$fname." ".$lname;
$message=$_POST['message3'];  

$sql="INSERT INTO  contactenquiries(name,phone,email,message) VALUES ('$name','$phone','$email','$message')";
//die;

$insert=$conn->query($sql);



/*$mail = new PHPMailer(true);
try {
//$mail->SMTPDebug = 2;                   // Enable verbose debug output
$mail->isSMTP();                      // Set mailer to use SMTP

$mail->Host='smtp.gmail.com';
// Specify main SMTP server
$mail->SMTPAuth   = true;               // Enable SMTP authentication
$mail->Username   = 'sumilaifix@gmail.com';     // SMTP username
$mail->Password   = 'jcqa cvfq iwrc plsu';         // SMTP password
$mail->SMTPSecure = 'tls';              // Enable TLS encryption, 'ssl' also accepted
$mail->Port       = 587;                // TCP port to connect to

$email=$_POST['emailidnews'];  

$mail->setFrom('sumilaifix@gmail.com','Admin');           // Set sender of the mail
$mail->addAddress('sumilaifix@gmail.com');           // Add a recipient

$mail->addAddress('sumila.c@gmail.com'); 
$mail->isHTML(true);                                  
$mail->Subject = 'New Subscription';

$message  = "<html><body>";
   
$message .= "<table width='100%' bgcolor='#e0e0e0' cellpadding='0' cellspacing='0' border='0'>";
   
$message .= "<tr><td>";
   
$message .= "<table align='center' width='100%' border='0' cellpadding='0' cellspacing='0' style='max-width:650px; background-color:#fff; font-family:Verdana, Geneva, sans-serif;'>";
    
$message .= "<thead>
  <tr height='80'>
  <th colspan='4' style='background-color:#f5f5f5; border-bottom:solid 1px #bdbdbd; font-family:Verdana, Geneva, sans-serif; color:#333; font-size:34px;' >Mosque</th>
  </tr>
             </thead>";
    
$message .= "<tbody>
            
      
       <tr>
       <td colspan='4' style='padding:15px;'>
       
       <hr />
       <p style='font-size:25px;'>New Subscription ,Below are the details</p>
       
       <p style='font-size:15px; font-family:Verdana, Geneva, sans-serif;'> Email ".$email.".</p>
      
       </td>
       </tr>
      
       
      
              </tbody>";
    
$message .= "</table>";
   
$message .= "</td></tr>";
$message .= "</table>";
   
$message .= "</body></html>";


$mail->Body    = $message;
//$mail->AltBody = 'Body in plain text for non-HTML mail clients'; 
$mail->send(); // Name is optional*/
//echo "You have been subscribed successfully!";
echo "You have successfully submitted the enquiry";

//} catch (Exception $e) {
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
//}
?>