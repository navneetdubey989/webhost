<?php

$username = filter_input(INPUT_POST,'uname');
$email = filter_input(INPUT_POST,'email');


$useraddress = $_POST['address'];
$usercontact = $_POST['contact'];





$host = "localhost";
$dbusername = "root";
$dbpass="";
$dbname = "projectinfo";

$conn = new mysqli($host,$dbusername,$dbpass,$dbname);

if(mysqli_connect_error()){
    die('connect error ('.mysqli_connect_error() .') '
    . mysqli_connect_error());
}
else{
   
    $sql="INSERT INTO buy(Username,Useremail,Useraddress,Usercontact)
     values('$username','$email','$useraddress','$usercontact')";
    if($conn->query($sql)){
        echo"new record sucessfully";
		header("location:home.html");
    }
	else{
        $error="SORRY !! AUTHENTICATION FAILED";
    }
    mysqli_close($conn);
	
}

?>