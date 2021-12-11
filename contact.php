<html>
    <head>
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="contact.css">
    </head>
    <body>
        <!-- NAVIGATION -->
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
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="about.php">About Us</a></li>
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

        <div id="contact-container">
            <h2>GET IN TOUCH</h2>
            <div id="content">
                <div id="contact-info">
                    <div id="logo-container">
                        <div id="phone-logo"></div>
                        <h2>09XXXXXXXXX</h2>
                    </div>
                    <div id="logo-container">
                        <div id="telephone-logo"></div>
                        <h2>09XXXXXXXXX</h2>
                    </div>
                    <div id="socmed-logo-container">
                        <img src="images/facebook.png" alt="facebook">
                        <img src="images/twitter.png" alt="twitter">
                    </div>
                </div>


                <div id="contact-form">
                    <br>
                    <h2>Leave us a message</h2>
                    <br>
                    <input type="text" id="input-info" placeholder="Name">
                    <br>
                    <input type="text" id="input-info" placeholder="Email">
                    <br>
                    <textarea rows = "5" cols = "60" placeholder="Write your message here" id="input-message"></textarea>
                    <br>
                    <button id="send">SEND</button>
                </div>
            </div>
        </div>
    </body>
</html>