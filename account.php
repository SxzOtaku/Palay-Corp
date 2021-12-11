<?php

    require 'backend/session.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Page</title>
    <link rel="stylesheet" href="account.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <style>
        #account-info-container{
            display: flex;
            width: 100%;
            height: 50px;
            flex-direction: row;
            align-items: flex-start;
            justify-content: space-between;
        }

        #edit-btn{
            background-color: green;
            color: white;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 30px;
            padding-right: 30px;
            border-radius: 10px;
        }
    </style>

    <!-- <script>
        function init(){
            var image = document.getElementById('prof_img');

            var cookieArray = document.cookie.split(';');

            var current_image = document.cookie.split(';')[0].split('=')[1];
            // PHPSESSID=otcj39mjcdp4kachrodqmojhmt
            if(current_image !== '' && cookieArray.length > 1){
                image.src = current_image;
                alert("YEY");
            }
            else{
                alert("FAK");
            }
        }
    </script> -->
</head>
<body onload="init()">
    <!-- <script>
        
        var image = document.getElementById('prof_img');
        document.getElementById('try').innerHTML = "EYYYYYY";

        var current_image = <?php echo $profile_image?>;

        if(current_image != ''){
            image.src = current_image;
            alert("YEY");
        }
        else{
            alert("FAK");
        }
        
    </script> -->
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
                <li><a href="#">My account</a></li>
                <li><a href="#">Wishlist</a></li>
                <li><a href="#">Checkout</a></li>
            </div>
        </div>
 <!-----------------------Navigation--------------------------------->

        <div class="navigation">
            <div class="logo">
                <img src="images/agri-icon.png" alt="logo">
                <h3 id="try">Palay <span>CORP</span></h3>
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
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Items</a></li>
                </div>
            </div>
            <div class="cart">
                <i class='bx bx-cart'></i>
                <div class="cart-details">
                    <h5>Shopping Cart</h5>
                    <p> 0 Items - $0.00 </p>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="side-nav">
                <div class="profile">
                    <!-- <div class="img"></div> -->
                    <img src="images/default_profile.png" style="height:50px;width:40px;margin-right:20px;" id="prof_img">
                    <div class="details">
                        <!-- <img src="default_profile.png" style="height:100px;width:100px;" id="prof_img"> -->
                        <h4><?php echo $fname . " " . $lname?></h4>
                        <p><a href="#"><i class='bx bx-edit' ></i> Edit profile</a></p>
                    </div>
                </div>
                <div class="side-nav-links">
                    <li data-nav="1">
                        <i class='bx bxs-user-account'></i>
                        <a href="#">My Account</a>
                    </li>
                    <li data-nav="2"><i class='bx bx-notepad' ></i><a href="#">My Purchase</a></li>
                    <li data-nav="3"><i class='bx bx-notification' ></i><a href="#">Notifications</a></li>
                    <li data-nav="4"><i class='bx bxs-bank'></i><a href="#">Banking</a></li>
                    <li data-nav="5"><i class='bx bx-money' ></i><a href="#">Investment</a></li>
                </div>
            </div>


<!----------------------------My Account ---------------------------------------->


            <div class="content-info active" data-main-content="1">
                <div class="account-profile">
                    <div class="profile-title">
                        <h3>My Profile</h3>
                        <p>Manage and protect your profile</p>
                    </div>
                    <div class="profile-content">
                        <div class="profile-content-left">
                            <div id="account-info-container">
                                <h5>Account Information Setup</h5>
                                <button onclick="window.location='Edit.php';" id="edit-btn">EDIT</button>
                            </div>
                            <form action="">
                                <div class="profile-row">
                                    <label for="">Username</label>
                                    <p id='test_fname'><?php echo $fname?></p>
                                </div>
                                <div class="profile-row">
                                    <label for="">Email</label>
                                    <p><?php echo $email?></p>
                                </div>
                                <!-- <div class="profile-row">
                                    <label for="">Password</label>
                                    <input type="password">
                                </div> -->
                                <!-- <div class="profile-row">
                                    <label for="">Confirm Password</label>
                                    <input type="password">
                                </div> -->
                                <div class="profile-row">
                                    <label for="">Phone Number</label>
                                    <p><?php require 'update.php'; echo $mobile_number ?></p>
                                </div>
                                
                                <div class="profile-row">
                                    <label for="">Address</label>
                                    <p><?php require 'update.php'; echo $user_address ?></p>
                                    <!-- <input type="radio" name="" id=""> <p>Male</p>
                                    <input type="radio" name="" id=""> <p>Female</p>
                                    <input type="radio" name="" id=""> <p>Other</p> -->
                                </div>
                                <div class="profile-row">
                                    <label for="">City</label>
                                    <p><?php require 'update.php'; echo $city ?></p>
                                </div>
                                <div class="profile-row">
                                    <label for="">Postal Code</label>
                                    <p><?php require 'update.php'; echo $postal_code ?></p>
                                </div>
                              
                              


                            </form>
                        </div>
                        <div class="profile-content-right">
                            <i class='bx bxs-user'></i>
                            <span>Select Image</span>

                            <p>File size: maximum 1 MB</p>
                            <p>File extension: .jpeg, png</p>
                            
                        </div>
                    </div>
                </div>
            </div>

<!----------------------------My Purchase ---------------------------------------->


            <div class="content-info" data-main-content="2">
                <div class="content-slide purchase">
                    <div class="purchase-header">
                        <li class="purchase-links active" data-link ="1"><a href="#">All</a></li>
                        <li class="purchase-links" data-link ="2"><a href="#" >To Pay</a></li>
                        <li class="purchase-links" data-link ="3"><a href="#" >To Ship</a></li>
                        <li class="purchase-links" data-link ="4"><a href="#" >To Receive</a></li>
                        <li class="purchase-links" data-link ="5"><a href="#">Completed</a></li>
                        <li class="purchase-links" data-link ="6"><a href="#" >Cancelled</a></li>
                    </div>
                    <div class="purchase-content active" data-content="1">
                        <h2>All</h2>
                    </div>
                    <div class="purchase-content" data-content="2">
                        <h2>To Pay</h2>
                    </div>
                    <div class="purchase-content" data-content="3">
                        <h2>To Ship</h2>
                    </div>
                    <div class="purchase-content" data-content="4">
                        <h2>To Receive</h2>
                    </div>
                    <div class="purchase-content" data-content="5">
                        <h2>Completed</h2>
                    </div>
                    <div class="purchase-content" data-content="6">
                        <h2>Cancelled</h2>
                    </div>
                </div>
            </div>

<!----------------------------My Notifications ---------------------------------------->

            <div class="content-info" data-main-content="3">
                <div class="notifications">
                    <div class="notifications-title">
                        <h4>Notifications</h4>
                    </div>

                </div>
            </div>


<!---------------------------- Banking  ---------------------------------------->


            <div class="content-info" data-main-content="4">
                <div class="banking">
                    <div class="banking-title">
                        <h4>Banking</h4>
                    </div>
                </div>
            </div>

<!----------------------------Investment ---------------------------------------->


            <div class="content-info" data-main-content="5">
                <div class="investment">
                    <div class="investment-title">
                        <h4>Investment</h4>
                    </div>
                </div>
            </div>

        </div>  
    </header>
    
    <script src="javascript/purchase.js"></script>
    <script src="javascript/accountNavigator.js"></script>
</body>
</html>