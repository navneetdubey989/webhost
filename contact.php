<?php

$username = filter_input(INPUT_POST,'name');
$email = filter_input(INPUT_POST,'email');

$message = filter_input(INPUT_POST,'message');

if(!empty($username)){
    if(!empty($email)){
        if(!empty($message)){
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
    $sql="INSERT INTO contact (username, email, message)
    values('$username','$email','$message')";
    if($conn->query($sql)){
        echo"new record sucessfully";
    }
    else{
        echo "error". $sql ."<br>". $conn->error;
    }
    $conn->close();
}
        }
        else{
            echo " messsage error";
            die();
        }
    }
    else{
        echo " email error";
        die();
    }
}
else{
    echo " username error";
    die();
}



?>