<?php
@include 'data-base-connect/config.php';
if(isset($_POST['submit'])){
    
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $pass = md5($_POST['password']);
    // $cpass = md5($_POST['cpassword']);
    
    $select ="select * FROM login WHERE email ='$email' && password ='$pass'";
    $result = mysqli_query($conn,$select);
    if(mysqli_num_rows($result)>0){
       $row = mysqli_fetch_array($result);
       header('location:index.php');
    }
    else{
        $error[]='Email and password not match!';
    }
};

// header("location: index.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> All Product - SHOP ONLINE  </title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <style>
            .container-login{
                background: radial-gradient(rgb(255, 255, 255), #ff523b);
                min-height: 500px;
                align-items: center;
                padding-top: 5%;
            }
            .login-form{
                margin-left: 32%;
                
                border-radius: 25px;
                width: 30%;
                height: 350px;
                background-color: white;
            }
            .login-form h2{
                color: black;
                font-size: x-large;
                font-family: Arial, Helvetica, sans-serifs;
                text-align: center;
                padding-top: 15px;
                padding-bottom: 15px;
               border-bottom: 3px solid #ff523b;
            
            }
            .label{
                margin-left: 7%;
                margin-top: 14px;
                font-size: 18px;
            }
            .field input{
                
               height: 24px;
               width: 80%;
               margin-left: 7%;
               margin-top: 14px;
                border-radius: 8px;
                border-color: black;
            }
            .login-form .form-btn{
                margin-left: 7%;
                margin-top: 15px;
                padding: 5px 5px 5px 5px;
                width: 80%;
                height: 15%;
                font-size: 18px;
                align-items: center;
                color: white;
                background-color: #ff523b;
                border-color: transparent;
                border-radius: 12px;
            }
            .form-btn:hover{
                background: #563434;
            }
            .login-form p{
                text-align: center;
                margin-top: 14px;
                color: black;
            }
            .login-form p a{
                color: blue;
                font-size: 14px;
            }
            .login-form p a:hover{
                color: red;
            }
            .login-form .error-msg{
                margin-left: 8%;
                padding:5px 5px 5px 5px ;
                width: 80%;
                border-radius: 5px;
                background-color: red;
            } 
        </style>
    </head>
    <body>
    
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="images/1664512227823.jpg" width="100px">
                </div>
                <nav>
                    <ul>
                      <!-- <li><a href="loginfist.php">Home</a></li>
                        <li><a href="loginfist.php">Product</a></li>
                        <li><a href="loginfist.php">Cart</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="account.php">Account</a></li> -->
                    </ul>
                </nav>
                
                </div>
         </div>

         <!----------account-->
        
    <div class="container-login">
        <div class="login-form">
        <form action="" method="post"> <h2 >Login</h2>
        <?php
            if(isset($error)){
                foreach($error as $error){
                    echo'<span class="error-msg">'.$error.'</span>';
                }
            }
            ?>
            
            <div class="label">Email</div>
           <div class="field">
            <input type="text" name="email" placeholder="  Enter Register mail id"required><br>
           </div>
           <div class="label">Password</div>
        <div class="field">
            <input type="password" name="password" placeholder="  your password" required><br>
        </div>
        <input type="submit" name="submit" value="Login" class="form-btn">
        <p>New user? <a href="signup.php">Signup now</a></p>
        </form>
        </div>
    </div>


<!----------footer------------>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3> download our app</h3>
                <p>download app for android or ios phones</p>
                <a href="signup.html"><img src="images/android.png" width="210px" height="50px"  ></a> 
                <a href="#"><img src="images/apple.png"width="210px" height="50px"></a>
            </div>
            <div class="footer-col-2">
                <img src="images/1664512227823.jpg" height="70px" width="100px">
                <p> logo image </p>
                <p>our purpose is to sustainable make pleasure and benefits of different tech gajits to the manny</p>

            </div>
            <div class="footer-col-3">
                <h3> usefull links </h3>
                <ul>
                    <li>coupons</li>
                    <li>blog post</li>
                    <li>return policy</li>
                    <li>join affiliate</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3> follow us </h3>
                <ul>
                    <li>facebook</li>
                    <li>twitter</li>
                    <li>instagram</li>
                    <li>you tube</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">copyright 2020- shop online </p>
    </div>
</div>



    </body>
</html>