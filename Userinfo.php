<?php

$username = filter_input(INPUT_POST,'username');
$email = filter_input(INPUT_POST,'email');

$password = filter_input(INPUT_POST,'password');

if(!empty($username)){
    if(!empty($email)){
        if(!empty($password)){
$host = "localhost";
$dbusername = "root";
$pass = "";
$dbname = "projectinfo";

$conn = new mysqli($host,$dbusername,$pass,$dbname);

if(mysqli_connect_error()){
    die('connect error ('.mysqli_connect_error() .') '
    . mysqli_connect_error());
}
else{
    $sql="INSERT INTO userinfodata (user, email, password ) values('$username','$email','$password')";
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
            echo " Password error";
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