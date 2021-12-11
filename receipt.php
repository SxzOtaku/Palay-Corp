<?php

    require 'backend/session.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt Page</title>
    <link rel="stylesheet" href="cart.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>





</head>



<body>
    <header>
        <div class="top-nav">
            <div class="left">
                <li><a href="seller-centre.php">Seller Centre</a></li>
                <li>|</li>
                <li><a href="#">Sell on PalayCorp</a></li>
                <li>|</li>
                <li><a href="#">Download</a></li>
                <li>|</li>
                <li><a href="#">Follow us on <i class='bx bxl-facebook'></i><i class='bx bxl-instagram' ></i></a></li>
            </div>
            <div class="right">
                <li><a href="#"><i class='bx bxs-notification' ></i> Notifications</a></li>
                <li><a href="#"><i class='bx bx-help-circle' ></i> Help</a></li>
                <li><a href="#"><i class='bx bxs-face' ></i> Username</a></li>
            </div>
        </div>

        <!--Navigation-->

        <div class="navigation">
            <div class="logo">
                <img src="images/agri-icon.png" alt="logo">
                <h3>Palay <span>CORP</span></h3>
                <a href="main.php"><h4>Home</h4></a>
                <h6>|</h6>
                <h4>Shopping Cart</h4>
            </div>
            <form action="#">
                <input type="search" placeholder="Get up to 50% Bills Cashback!">
                <button type="submit"><i class='bx bx-search' ></i></button>
            </form>
        </div>
    </header>

    <div class="content">
        <div class="main-content">
            <div class="offer">
                <i class='bx bxs-truck'></i><p>Select free shipping boucher below to enjoy discount.</p>
            </div>
            
  <div id="invoice-POS">
    
    <center id="top">
      <div class="logo"></div>
      <div class="info"> 
        <h2>Receipt</h2>
      </div><!--End Info-->
    </center><!--End InvoiceTop-->
    
    <div id="mid">
      <div class="info">
        <h2>Contact Info</h2>
        <p> 
            Receipient :&nbsp;&nbsp;&nbsp; <?php echo $fname . ' ' . $lname?></br>
            Address :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php require 'update.php'; echo $user_address . ', ' . $city ?></br>
            Email   :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $email ?></br>
            Phone   :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $mobile_number?></br>
            
        </p>
      </div>
    </div><!--End Invoice Mid-->
    
                    <div id="bot">

					<div id="table">
						<table>
							<tr class="tabletitle">
								<td class="item"><h2>Item</h2></td>
								<td class="Hours"><h2>Qty</h2></td>
								<td class="Rate"><h2>Sub Total</h2></td>
							</tr>

							<tr class="service">
								<td class="tableitem"><p class="itemtext">Dinorado</p></td>
								<td class="tableitem"><p class="itemtext">2</p></td>
								<td class="tableitem"><p class="itemtext">Php 2,100.00</p></td>
							</tr>

							<!-- <tr class="service">
								<td class="tableitem"><p class="itemtext">Asset Gathering</p></td>
								<td class="tableitem"><p class="itemtext">3</p></td>
								<td class="tableitem"><p class="itemtext">$225.00</p></td>
							</tr>

							<tr class="service">
								<td class="tableitem"><p class="itemtext">Design Development</p></td>
								<td class="tableitem"><p class="itemtext">5</p></td>
								<td class="tableitem"><p class="itemtext">$375.00</p></td>
							</tr>

							<tr class="service">
								<td class="tableitem"><p class="itemtext">Animation</p></td>
								<td class="tableitem"><p class="itemtext">20</p></td>
								<td class="tableitem"><p class="itemtext">$1500.00</p></td>
							</tr>

							<tr class="service">
								<td class="tableitem"><p class="itemtext">Animation Revisions</p></td>
								<td class="tableitem"><p class="itemtext">10</p></td>
								<td class="tableitem"><p class="itemtext">$750.00</p></td>
							</tr> -->


							<!-- <tr class="tabletitle">
								<td></td>
								<td class="Rate"><h2>tax</h2></td>
								<td class="payment"><h2>$419.25</h2></td>
							</tr> -->

							<tr class="tabletitle">
								<td></td>
								<td class="Rate"><h2>Total</h2></td>
								<td class="payment"><h2>Php 2,100.00</h2></td>
							</tr>

						</table>
					</div><!--End Table-->

					<div id="legalcopy">
						<p class="legal"><strong>Thank you for your business!</strong>  Payment is expected within 31 days; please process this invoice within that time. There will be a 5% interest charge per month on late invoices. 
						</p>
					</div>

				</div><!--End InvoiceBot-->
  </div><!--End Invoice-->

        </div>
    </div>
    <div class="checkout-panel">
        <div class="top">

        </div>
        <div class="middle">

        </div>
        <div class="bottom">
            
        </div>
    </div>

    <script src="javascript/quantity.js"></script>
</body>
</html>