
<?php
include("functions/functions.php");

include("includes/db.php");
?>

<html>
    
<head>
<title>Online shopping  for toys</title>

<link rel="stylesheet" href="style.css" media="all" />
</head>

    <body>
        
    <!-- Main container starts here -->
        <div class="main_wrapper">
            
            <div class="header_wrapper">
                
            <div class="header_logo">
                    <a href="index.php>">
                    <img id="logo" src="images/headerlogo100x30.png.jpg"/>
                    </a>
                </div><!-- /.header_logo -->
            
                <div id="form">
                <form method="get" action="results.php" enctype="multipart/form-data">
                    <input type="text" name="user_query" placeholder="Search a Product"/>
                    <input type="submit" name="search" value="Search"/> 
                </form>
            </div>
        
        <div class="cart">
        <ul>
            <li class="dropdown_header_cart">
                <div id="notification_total_cart" class="shopping-cart">
                    <img src="images/cart_icon.png" id="cart_image">
                </div>
            </li>
        </ul>
        </div>
        
    <div class="register_login">
       <div class="login"><a href="index.php?action=login">Login</a></div> 
        <div class="register"><a href="customer_register.php">Register</a></div>
    </div>    
    

</div><!-- /.header_wrapper -->
   
 <div class="menubar">
    <ul id="menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="all_products.php">All Products</a></li>
        <li><a href="customer/my_account.php">My Account</a></li>
        <li><a href="cart.php">Shopping Cart</a></li>
        <li><a href="contact.php">Contact Us</a></li>
    </ul>
 </div>   
        
 <div class="content_wrapper">
        <div id="sidebar">
            <div id="sidebar_title">Categories</div>
            <ul id="cats">
                <!-- <li><a href="index.php">Boys</a></li>
                <li><a href="index.php">Girls</a></li>
                <li><a href="index.php">Other</a></li> -->
            <!-- </ul>

            <div id="sidebar_title">Brands</div>
            <ul id="cats">
                <li><a href="index.php">Lego</a></li>
                <li><a href="index.php">Mattel</a></li>
                <li><a href="index.php">Schleich</a></li> -->
            <!-- </ul> -->
                <?php
                getCats();
                ?>
            </ul>

        </div>
        </div><!-- /.content_wrapper -->
                <div id="footer">
                <h2 style="text-align:center; padding-top:30px">&copy; 2022 by Anh</h2>
                </div>
        </div><!-- /.main_wrapper -->
<!-- End main container starts here -->
    </body>
</html>