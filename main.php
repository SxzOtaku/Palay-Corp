<?php

    require 'backend/backend_login.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="main.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <!-- INIT DATA -->
    <script>
        $.ajax({
            type: 'GET',
            url: 'backend/get_product.php',
            datatype: 'json',
            contentType: 'application/json; charset=utf-8',
            success: function(data)
            {
                var parsedData = jQuery.parseJSON(data); // RETURN TYPE OF MULTI DIMENSION ARRAY

                for(var i = 0; i < parsedData.length; i++){
                    var name = parsedData[i][1];
                    var price = parsedData[i][3];
                    
                    // ADD ITEM FROM DATABASE
                    $('#display-new').append("<div class='sack'><span></span><h5>" + name + "</h5><p>P" + price +"</p></div>");
                }    
            }
        });
    </script>

</head>
<body>
    <header>
        <div class="top-nav">
            <div class="left">
                <select name="language" class="language">
                    <option value="English">English</option>
                    <option value="Filipino">Filipino</option>
                </select>
                <select name="currency" class="currency">
                    <option value="Dollar">Dollar</option>
                    <option value="Peso">Peso</option>
                </select>
            </div>
            <div class="right">
                <li><a href="account.php">My account</a></li>
                <li><a href="#">Wishlist</a></li>
                <li><a href="#">Checkout</a></li>
            </div>
        </div>

        <!--Navigation-->

        <div class="navigation">
            <div class="logo">
                <img src="images/agri-icon.png" alt="logo">
                <h3>Palay <span>CORP</span></h3>
            </div>
            <div class="nav-content">
                <div class="search">
                    <form action="">
                    <input type="search" placeholder="Search here">
                    <button type="submit"><ion-icon name="search"></ion-icon></button>
                    </form>
                </div>
                <div class="nav-links">
                    <li><a href="main.php">Home</a></li>
                    <li><a href="items.php">Items</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">About Us</a></li>
                </div>
            </div>
            <div class="cart">
                <ion-icon name="cart"></ion-icon>
                <div class="cart-details">
                    <h5><a href="http://localhost:4000/palayCorp/cart.php">Shopping Cart</a></h5>
                    <p> 0 Items - $0.00 </p>
                </div>
            </div>
        </div>


        <!--Content-->
        
        <div class="main-content">
            <div class="content-one">
                <h1>Feeding the country for over 100 years.</h1>
                <p>Get the top quality Phippine Rice</p>
                <button>Shop Now</button>
            </div>
            <div class="right-content">
                <div class="content-two">
                    <h2>Thriving the ECONOMY</h2>
                    <p>Banaue Rice Terraces</p>
                </div>
                <div class="content-three"></div>
            </div>
        </div>
    </header>
    <div class="products">
        <div class="benefits">
            <span><i class='bx bx-heart' ></i><h4>Free Shipping on Orders over $5000</h4></span>
            <span><i class='bx bx-refresh' ></i><h4>30-DAY RETURNS MONEY BACK</h4></span>
            <span><i class='bx bx-shape-circle' ></i><h4>24/7 SUPPORT</h4></span>
        </div>
        <div class="varieties">
            <div class="variety-header"><i class='bx bxs-left-arrow' ></i><i class='bx bxs-right-arrow' ></i></div>
            <div class="variety-title"><h4>Varieties</h4></div>
            <div class="variety-container">
                <div class="variety"><span></span><p>7 TONNER</p></div>
                <div class="variety"><span></span><p>ANGELIKA</p></div>
                <div class="variety"><span></span><p>AZUCENA</p></div>
                <div class="variety"><span></span><p>BAYSALINON</p></div>
                <div class="variety"><span></span><p>CORDILLERA RICE</p></div>
                <div class="variety"><span></span><p>MAHARLIKA</p></div>
                <div class="variety"><span></span><p>MALAGKIT</p></div>
            </div>
        </div>
        <div class="shopping">
            <div class="shopping-header">
                    <li><h4>FEATURES</h4></li>
            </div>
            <div class="display">
                <div class="sack">
                    <span></span><h5>Description</h5><p>$500.00</p>
                </div>
                <div class="sack">
                    <span></span><h5>Description</h5><p>$500.00</p>
                </div>
                <div class="sack">
                    <span></span><h5>Description</h5><p>$500.00</p>
                </div>
                <div class="sack">
                    <span></span><h5>Description</h5><p>$500.00</p>
                </div>
            </div>
        </div>
        <div class="shopping">
            <div class="shopping-header">
                    <li><h4>NEW</h4></li>
            </div>
            <div class="display" id="display-new">
                <!-- <div class="sack">
                    <span></span>
                    <div class="sack-details">
                    
                        <button>Add to Cart</button>
                    </div>
                </div> -->
                <!-- <div class="sack">
                    <span></span><h5>Description</h5><p>$500.00</p>
                </div>
                <div class="sack">
                    <span></span><h5>Description</h5><p>$500.00</p>
                </div>
                <div class="sack">
                    <span></span><h5>Description</h5><p>$500.00</p>
                </div> -->
            </div>
        </div>

        <div class="shopping">
            <div class="shopping-header">
                    <li><h4>ARRIVALS</h4></li>
            </div>
            <div class="display">
                <div class="sack">
                    <span></span><h5>Description</h5><p>$500.00</p>
                </div>
                <div class="sack">
                    <span></span><h5>Description</h5><p>$500.00</p>
                </div>
                <div class="sack">
                    <span></span><h5>Description</h5><p>$500.00</p>
                </div>
                <div class="sack">
                    <span></span><h5>Description</h5><p>$500.00</p>
                </div>
            </div>
        </div>
    </div>
    <?php 
        include 'footer.php';
    ?>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>

