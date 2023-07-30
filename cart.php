<?php include_once "header.php"; ?>
    <body>
    
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="images/1664512227823.jpg" width="100px">
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="product.php">Product</a></li>
                        <li><a href="cart.php">Cart</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="account.php">Account</a></li>
                        <li><a href="logout.php">Log out</a></li>
        
                    </ul>
                </nav>
                
                </div>
         </div>
<!--------cart item details -->
<div class="small-container cart-page">
    <table>
        <tr>
            <th>product</th>
            <th>quantity</th>
            <th>subtotal</th>
        </tr>
        <tr>
            <td><div class="cart-info">
                <img src="images/iphone1.png">
                <div>
                    <p>APPLE iPhone 11 (Black, 128 GB)</p>
                    <small>19,000/-Rs</small><br>
                    <a href="">Remove</a>
                </div>
            </div></td>
            <td><input type="number" value="1"></td>
            <td>19,000/- Rs</td>
        </tr>
        <tr>
            <td><div class="cart-info">
                <img src="images/band2.0.png">
                <div>
                    <p> Amazon Basics Bluetooth 5.0 </p>
                    <small>600/-Rs</small><br>
                    <a href="">Remove</a>
                </div>
            </div></td>
            <td><input type="number" value="1"></td>
            <td>600/- Rs</td>
        </tr>
        <tr>
            <td><div class="cart-info">
                <img src="images/categry-2.jpg">
                <div>
                    <p>Black Printed White T-Shirt</p>
                    <small>550/-Rs</small><br>
                    <a href="">Remove</a>
                </div>
            </div></td>
            <td><input type="number" value="1"></td>
            <td>550/- Rs</td>
        </tr>
    </table>

    <div class="total-price">
        <table>
            <tr>
                <td> <b>Subtotal</b> </td>
                <td>20,150/-Rs</td>
            </tr>
            <tr>
                <td> <b>Tex</b> </td>
                <td>201/-Rs</td>
            </tr>
            <tr>
                <td> <b>Total</b></td>
                <td> <b>20,351/-Rs</b> </td>
            </tr>
        </table>
    </div>
    
</div>
    


<!----------footer------------>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3> download our app</h3>
                <p>download app for android or ios phones</p>
                <img src="images/android.png" width="210px" height="50px">
                <img src="images/apple.png"width="210px" height="50px">
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