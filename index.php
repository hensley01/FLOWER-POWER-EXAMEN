<?php
include ("functions/functions.php");
include("includes/db.php");
?>

<html xmlns="http://www.w3.org/1999/html">

<head>
    <title>Flower Power</title>

    <link rel="stylesheet" href="styles/style.css" media="all"/>
</head>

<body>

<!-- Main content begint hier -->
<div class="main_wrapper">


    <div class="header_wrapper">

        <div class="header_logo">
            <a href="index.php">
                <img id="logo" src="images/flower_power_examen.jpg"/>
            </a>
        </div><!--/.header_logo-->

        <div id="form">
            <form method="get" action="results.php" enctype="multipart/form-data">
                <input type="text" name="user_query" placeholder="Zoek een product"/>
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

        <div class="menubar">
            <ul id="menu">
                <li><a href="index.php">Homepagina</a></li>
                <li><a href="all_products.php">Alle categorieen</a></li>
                <li><a href="customer/my_account.php">Mijn account</a></li>
                <li><a href="cart.php">Winkelwagen</a></li>
                <li><a href="payment.php">Afrekenen</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div><!--/.header_wrapper -->

    <div class="content_wrapper">
        <div id="sidebar">
            <div id="sidebar_title">Categories</div>
            <ul id="cats">
                <li><a href="index.php">Boeketten</a> </li>
                <li><a href="index.php">Losse Bloemen</a> </li>
                <li><a href="index.php">Kamerplanten</a> </li>

                <?php
          getCats();
                ?>
            </ul>
            </div>
        </div>
    </div><!-- /.content_wrapper-->

    <div id="footer">
        <h2 style="text-align:center; padding-top: 30px">&copy; 2022 ROC van Flevoland - <?php echo date('Y');?> Door Hensley Hubert</h2>
    </div>
</div><!-- /.main wrapper-->
<!-- Einde van de Main container begint hier --->

</body>

</html>