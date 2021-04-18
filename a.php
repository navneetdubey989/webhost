<?php
session_start();

if(isset($_POST['verify']))
			{
				$ver=$_POST['sum'];
				if($ver==$_SESSION['var']) {
                    echo '<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
                    <script>
                    var options = {
                        "key": "rzp_test_EIUhDtvCd68fIz", // Enter the Key ID generated from the Dashboard
                        "amount": "50000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                        "currency": "INR",
                        "name": "Equipstat",
                        "description": " Transaction",
                        "image": "image/45.png",
                        "handler": function (response){
                            myfun();
                            
                            
                        }
                        
                    };
                    var rzp1 = new Razorpay(options);
                    function myfunction(){
                        rzp1.open();

                    }
                    
                    myfunction();
                    
                    function myfun(){
                        window.location.href="home.html";
                        
                            alert("payment sucessfull");
                         
                    } 
                   
                   
                    </script>';
                   
				}

				else{
				echo '<script>alert("Incorrect OTP");window.location.href="a.php";</script>';

			}
        }
			else {
			?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <title>verify - Equipstat </title>
     <link rel="stylesheet" href="style.css">
</head>
    <body>

    <div class="contaner">
        <div class="navbar">
           <div class="logo">
                  <a href="index.html"><img src="image/45.png" width="125px"></a>
           </div>
          <nav>
            <ul id="MenuItems">
                <li><a href="home.html">Home</a> </li>
                <li><a href="product.html">product</a> </li>
                <li><a href="About.html">About</a> </li>
                <li><a href="Contact.html">Contact</a> </li>
                <li><a href="account.html">Account</a> </li>
                

            </ul>
          </nav>
         <a href="cart.html"> <img src="image/cart1.png" width="30px" height="30px" ></a>
          <img src="image/menu.png" class="menu-icon" onclick="menutoggle()">

     </div>
    </div>

  <!-- verification -->

	<div class='veri'>
        <form action="" method="post">
        <input class="from-control" type="text" name='sum'><br>
        <button id='rzp-button1' class='btn' name='verify' type="submit">verify</button>
	    </from>
    </div>

    <!----footer------>
<div class="footer" >
    
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App</h3>
                <p>Download App for Android and ios mobile phone.</p>
                <div class="app-logo">
                    <img src="image/logo1.jpg">
                    <img src="image/logo2.jpg">
                </div>
            </div>
            <div class="footer-col-2">
                <img src="image/45.png" width="125px">
                <p>Our purpose is to make goood Quality products and provided to pepole.</p>
          </div>
          <div class="footer-col-3">
              <h3>Useful Link</h3>
              <ul>
                  <li>coupons</li>
                  <li>Blog Post</li>
                  <li>Return policy</li>
                  <li>join Affiliate</li>
              </ul>
          </div>
          <div class="footer-col-4">
                <h3>follow us</h3>
              <ul>
                  <li>facebook</li>
                  <li>Twitter</li>
                  <li>Instagram</li>
                  <li>You Tube</li>
             </ul>
         </div>
      </div>
      <hr>
      <P class="copyright">copyright 2020 </P>
 </div>  
</div>



	<?php
			}
			?>

!-- js for toggle menu -->
<script>
    var mywindow;
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";

    function menutoggle(){

        if(MenuItems.style.maxHeight == "0px")
        {
            MenuItems.style.maxHeight = "200px";
        }

        else
        {
            MenuItems.style.maxHeight = "0px";
        }
    }


</script>

    </body>
</html>
<style>
    .veri{
        /* align-items: center; */

        text-align: center;
        margin: 160px; 
        
    }
    </style>