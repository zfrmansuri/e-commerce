
<?php 
  session_start();
  if(isset($_SESSION['id'])){
    header("location: payment.php");
  }
?>
<?php include_once "header.php"; ?>

    <body>
        <div class="header">
        <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                   <a href="sep"> <img src="images/1664512227823.jpg" width="100px"></a>
                   
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="product.php">Product</a></li>
                        <li><a href="cart.php">Cart</a></li>
                        <li><a href="" >Contact</a></li>
                        <li><a href="account.php">Account</a></li>
                        <li><a href="logout.php">Log out</a></li>
        
                    </ul>
                </nav>
                
                </div>
                <div class="row">
                    <div class="col_2">
                        <img src="images/R.png" height="650px" weight="350px" >
                    </div>
                    <div class="col_2">
                        <h1>    Get lowest prises ever  </h1>
                        <p> shop here for heigest offers in many product </p><br>
                       <h1>
                        APPLE iPhone 11 (Black, 128 GB)</h1>
                        <h1> only at 59,000/- Rs </h1>
                        <h2>Click the Explore more to get more details <br> about this product</h2>
                       <a href="iphone.php" class="btn">Explore more &#8594;</a> 
                      
                    </div>
                </div>
        </div>
    </div>
</div>

<div class="navbar-1">
    
    <nav>
        <ul>
            <li><a href="product.php">All Product</a></li>
            <li><a href="tech.php">Appliances</a></li>
            <li><a href="">Electronics</a></li>
            <li><a href="https://www.flipkart.com/offers-list/sports-healthcare-more?screen=dynamic&pk=themeViews%3DDT-OMU-3%3ADeal-DT~widgetType%3DdealCard~contentType%3Dneo&wid=13.dealCard.OMU_8&otracker=hp_omu_Sports%252C%2BHealthcare%2B%2526%2Bmore_8&otracker1=hp_omu_PINNED_neo%2Fmerchandising_Sports%252C%2BHealthcare%2B%2526%2Bmore_NA_wc_view-all_8">Sports, Healthcare & more</a></li>
           

        </ul>
    </nav>
    
    </div>
    
</div>
<!---------- featured categories ----------->
<div class="categories">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <a href="samsung.php"><img src="images/project1.0.png" width="200px" height="250px"></a>
            </div>
            <div class="col-3">
               <a href="m35.php"> <img src="images/product2.0.png" width="200px" height="250px"></a>
            </div>
            <div class="col-3">
                <a href="xiaomi.php"><img src="images/product3.0.png" width="200px" height="250px"></a>
            </div>
           
        </div>
    </div>
    
</div>
<!---------- featured product ----------->
<div class="small-container">

    <div class="row">
        <div class="col-4">
        <a href="product-details.php"><img src="images/product4.0.png" ></a>
           <a href="product-details.php"> <h4>  iQOO Neo 6 5G (Dark Nova, 8GB RAM, 128GB Storage) | Snapdragon® 870 5G | 80W FlashCharge </h4></a>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o" ></i>
            </div>
            <p> 800/- Rs </p>
        </div>
        <div class="col-4">
            <a href="appleport.php"><img src="images/pods1.png" ></a>
               <a href="appleport.php"> <h4>   Apple AirPods Pro (2nd Generation) ​​​​​​​</h4></a>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o" ></i>
                </div>
                <p> 26,990/- Rs </p>
            </div>
        <div class="col-4">
            <a href="oppo.php"><img src="images/product5.0.png" ></a>
           <a href="oppo.php"> <h4> OPPO A31 (Mystery Black, 6GB RAM, 128GB Storage) with No Cost EMI/Additional Exchange Offers</h4></a>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                
            </div>
            <p> 11,999/- Rs </p>
        </div>
        <div class="col-4">
            <img src="images/band1.0.png" >
            <h4>Amazon Basics Bluetooth 5.0 Neckband with Up to 30 Hours Playtime, Magnetic Earbuds, Voice Assistant, Dual Pairing and IPX6 Rated (Black)</h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-half-o" ></i>
            </div>
            <p> 600/- Rs </p>
        </div>
        <div class="col-4">
            <img src="images/band2.0.png" >
            <h4>New JBL Tune 130NC TWS | Active Noise Cancellation Earbuds (Upto 40dB) | JBL APP - Adjust EQ for Extra Bass | Massive 40Hrs Playtime | Legendary JBL Sound | 4Mics for Clear Calls | BT 5.2 (Black)</h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o" ></i>
            </div>
            <p> 3,700/- Rs </p>
        </div>
    </div>
    <h2 class="title">Latest product </h2>
    <div class="row">
        <div class="col-4">
            <img src="images/blu1.0.png" height="270px" >
            <h4>Echo Dot (4th Gen, 2020 release) with clock | Next generation smart speaker with powerful bass, LED display and Alexa (Blue)</h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o" ></i>
            </div>
            <p> 2,949/- Rs </p>
        </div>
        <div class="col-4">
            <img src="images/product2.0.png" >
            <h4>Samsung Galaxy M53 5G (Mystique Green, 6GB, 128GB Storage) | 108MP | sAmoled+ 120Hz | 12GB RAM with RAM Plus</h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                
            </div>
            <p> 18,000/- Rs </p>
        </div>
        <div class="col-4">
            <img src="images/band3.png"  height="230px">
            <h4> New JBL Tune 130NC TWS | Active Noise Cancellation Earbuds (Upto 40dB) | JBL APP - Adjust EQ for Extra Bass | Massive 40Hrs Playtime | Legendary JBL Sound | 4Mics for Clear Calls | BT 5.2 (White)</h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-half-o" ></i>
            </div>
            <p> 800/- Rs </p>
        </div>
        <div class="col-4">
            <img src="images/WhatsApp Image 2022-10-01 at 11.10.10 PM (1).jpeg" height="250px" >
            <h4> white printed t-shirt </h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o" ></i>
            </div>
            <p> 800/- Rs </p>
        </div>
        <div class="col-4">
            <img src="images/spek1.0.png" height="260px" >
            <h4> white t-shirt </h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o" ></i>
            </div>
            <p> 800/- Rs </p>
        </div>
        <div class="col-4">
            <img src="images/project1.0.png" >
            <h4>Samsung Galaxy S20 FE 5G (Cloud Navy, 8GB RAM, 128GB Storage)</h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                
            </div>
            <p> 15,599/- Rs </p>
        </div>
        <div class="col-4">
            <img src="images/blu2.0.png" height="260px" >
            <h4>Echo Dot (Black) Combo with Wipro 16A Smart Plug</h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-half-o" ></i>
            </div>
            <p> 2,090/- Rs </p>
        </div>
        <div class="col-4">
            <img src="images/ble3.png" >
            <h4>Echo Studio - Smart speaker with high-fidelity audio, Dolby Atmos and Alexa (Black)</h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o" ></i>
            </div>
            <p> 22,000/- Rs </p>
        </div>
        <div class="col-4">
            <img src="images/band3.png"  height="230px">
            <h4> New JBL Tune 130NC TWS | Active Noise Cancellation Earbuds (Upto 40dB) | JBL APP - Adjust EQ for Extra Bass | Massive 40Hrs Playtime | Legendary JBL Sound | 4Mics for Clear Calls | BT 5.2 (White)</h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-half-o" ></i>
            </div>
            <p> 800/- Rs </p>
        </div>
        <div class="col-4">
            <img src="images/band3.png"  height="230px">
            <h4> New JBL Tune 130NC TWS | Active Noise Cancellation Earbuds (Upto 40dB) | JBL APP - Adjust EQ for Extra Bass | Massive 40Hrs Playtime | Legendary JBL Sound | 4Mics for Clear Calls | BT 5.2 (White)</h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-half-o" ></i>
            </div>
            <p> 800/- Rs </p>
        </div>
    </div>

</div>
<!---------- best offer ----------->
<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img src="images/project1.4.png" class="offer-img" height="250px" width="400px">
            </div>
            <div class="col-2">
                <h2> From the manufacturer </h2>
                <h1>SAMSUNG </h1>
                <h2>Galaxy S20 FE 5G </h2>
                <h3> Snapdragon | Pro-Grade<br>processor |  Camera</h3>
                <small> </small><br>
                <a href="samsung.php" class="btn">Buy Now &#8594;</a>
            </div>
        </div>
    </div>
</div>
<!-------tesstimonial --------->
<div class="tesstimonial">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <i class="fa fa-quote-left" ></i>
                <p>I really like this phone. I am very <br> happy. When I received the mobile <br> the package is very beautiful. <br> I like the colour and <br> model. </p>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o" ></i>
            </div>
            <h3> Deepak </h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left" ></i>
                <p>I really like this phone . I am very <br> happy. My family is very happy. <br> When I received the mobile the <br> package is very beautiful. <br> I like the colour and model.</p>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o" ></i>
            </div>
            <h3> k͏a͏m͏i͏l͏a͏ </h3>
            <p></p>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left" ></i>
                <p>The brand is very trustworthy and i <br> got genuine pice at a very low <br> cost.I ordered the green one and <br> trust me the colour was amazing.</p>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o" ></i>
            </div>
            <h3> Nikhil Ji </h3>
            <p></p>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left" ></i>
                <p>This is better for normal person. It <br> camera is good but not very good. <br> Battery power is super .. And <br> display is powerful this phone <br> is good look like iPhone 13 pro max.</p>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o" ></i>
            </div>
            <h3> GITARTHA </h3>
            <p></p>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left" ></i>
                <p>I really like this phone . I am very <br> happy. My family is very happy. <br> When I received the mobile the <br> package is very beautiful. <br> I like the colour and model.</p>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o" ></i>
            </div>
            <h3> k͏a͏m͏i͏l͏a͏ </h3>
            <p></p>
            </div>
           
            
        </div>
    </div>
</div>

<!----------brands--------->
<div class="brand">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="images/amazon.png">
            </div>
            <div class="col-5">
                <img src="images/boat.png">
            </div>
            <div class="col-5">
                <img src="images/mi-logo.jpg" height="80px">
            </div>
            <div class="col-5">
                <img src="images/Samsung-Logo.jpg">
            </div>
        </div>
    </div>
</div>
<!----------footer------------>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3> download our app</h3>
                <p>download app for android or ios phones</p>
                <a href="https://play.google.com/store/games"><img src="images/android.png" width="210px" height="50px"></a>
               <a href="https://www.apple.com/app-store/"> <img src="images/apple.png"width="210px" height="50px"></a>
            </div>
            <div class="footer-col-2">
                <img src="images/1664512227823.jpg" height="70px" width="100px">
                
                <p>Our purpose is to sustainable make pleasure and benefits of different tech gajits to the manny</p>

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