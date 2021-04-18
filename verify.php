
<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;




include('db.php');

$otp=rand(000000,999999);
$_SESSION['var']=$otp;
if(isset($_POST['submit'])){

    $username = $_POST['uname'];
$email = $_POST['email'];
$useraddress = $_POST['address'];
$usercontact = $_POST['contact'];




$subject = "email verifaction";
   $body='OTP:'.$otp;
   echo $otp;


require_once "PHPMailer/src/PHPMailer.php";
require_once "PHPMailer/src/SMTP.php";
require_once "PHPMailer/src/Exception.php";

$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPAuth = true; 
	$mail->Username = "navneetdubey989@gmail.com";
	$mail->Password = "8208233524";
	$mail->Port = 465; 
	$mail->SMTPSecure = 'ssl'; 
	$mail->IsHTML(true);
	$mail->SetFrom($email,$username);
	$mail->addAddress($email);
	$mail->Subject = $subject;
	$mail->Body =$body;
	if(!$mail->Send()){
		echo 'sent';
	}else{
		echo 'wrong';
	}

$sql="INSERT INTO verify (uname,email,address,contact) values('$username','$email','$useraddress','$usercontact')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }

  header('Location:a.php ');
}
?>

