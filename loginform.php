<?php
                    

                      
                      $hostname= "localhost";
                      $username= "root";
                      $pass= "";
                      $database= "projectinfo";


                      
                      function test_input($data) {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                       
                        return $data;
                      } 

                      if(empty($_POST['user']) || empty($_POST['password']))
                      {
                        $error= "UserName or Password is Recquired.";
                      }
                      else
                      {
                        $user= test_input($_POST['user']);
                        $password= test_input($_POST['password']);

						echo"$password";
						echo"$user";
                        
                        $conn= mysqli_connect($hostname, $username, $pass, $database);

                        
                        if(!$conn)
                        {
                          die("Connection Failed : ".mysqli_connect_error());
                        }

                        $sql= "SELECT * FROM projectinfo.userinfodata WHERE user='".$user."' AND password='".$password."'";
                        $query= mysqli_query($conn, $sql);
                       

                        
                        if(mysqli_num_rows($query)==1)
                        {
                          header("location:home.html");
                        }
                        else
                        {
                          $error="SORRY !! AUTHENTICATION FAILED";
                          


                          echo "<strong>Your Combination of UserName and Password is Incorrect. Better, You contact to the developer of system.</strong>";
                        }

                        mysqli_close($conn);

                      }
                    
          ?>
          