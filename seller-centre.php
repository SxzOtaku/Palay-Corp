<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Centre</title>
    <link rel="stylesheet" href="seller-centre.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header>
        <div class="logo">
            <img src="images/agri-icon.png" alt="logo">
            <h3>Palay <span>CORP</span></h3>
            <a href="main.php"><h4>Home</h4></a>
        </div>
        <a href="#"><h4>Seller Center</h4></a>
    </header>
    <div class="sell-content">
        <div class="side-nav">
            <div class="seller-profile">
                <span><i class='bx bx-user'></i></span>
                <h4>My Shop</h4>
            </div>
            <ul class="nav-links">
                <li data-link="1"><a href="#"><i class='bx bxs-dashboard' ></i>Dashboard</a></li>
                <li data-link="2"><a href="#"><i class='bx bx-notepad' ></i>Orders</a></li>
                <li data-link="3"><a href="#"><i class='bx bxs-truck' ></i>Shipments</a></li>
                <li data-link="4"><a href="#"><i class='bx bx-shopping-bag' ></i>Products</a></li>
                <li data-link="5"><a href="#"><i class='bx bx-user-circle' ></i>Customers</a></li>
                <li data-link="6"><a href="#"><i class='bx bx-message-rounded-dots' ></i>Messages</a></li>
                <li data-link="7"><a href="#"><i class='bx bx-help-circle' ></i>Help</a></li>
                <li><a href="#"><i class='bx bx-log-out' ></i>Sign out</a></li>

            </ul>
        </div>

        <!-----------------------------Dashboard-------------------------------->

        <div class="main-content" data-content="1">
            <div class="content-title"><h4>Dashboard</h4></div>
            <div class="info-summary">
                <div class="top-info">
                    <div class="sales">
                        <div class="sales-left">
                            <h2>345</h2>
                            <h4>Sales</h4>
                        </div>
                        <i class='bx bx-cart-alt'></i>
                    </div>
                    <div class="orders">
                        <div class="orders-left">
                            <h2>537</h2>
                            <h4>Orders</h4>
                        </div>
                        <i class='bx bx-notepad' ></i>
                    </div>
                    <div class="purchases">
                        <div class="purchases-left">
                            <h2>1025</h2>
                            <h4>Purchases</h4>
                        </div>
                        <i class='bx bx-purchase-tag' ></i>
                    </div>
                    <div class="comments">
                        <div class="comments-left">
                            <h2>829</h2>
                            <h4>Comments</h4>
                        </div>
                        <i class='bx bx-comment' ></i>
                    </div>
                </div>
                
            </div>
        </div>

<!------------------------------------Orders------------------------->

<div class="main-content" data-content="2">
    <div class="content-title"><h4>Orders</h4></div>

<table class="recent-orders">
                    <tr>
                        <th>Product</th>
                        <th>Address</th>
                        <th>Delivery Date</th>
                        <th>Payment</th>
                        <th>Status</th>
                    </tr>
                    <tr>
                        <td>Sinandomeng</td>
                        <td>San Jose, Batangas</td>
                        <td>06/23/2022</td>
                        <td>Paid</td>
                        <td><h5 class="delivered">Delivered</h5></td>
                    </tr>
                    <tr>
                        <td>Sinandomeng</td>
                        <td>San Jose, Batangas</td>
                        <td>06/23/2022</td>
                        <td>Due</td>
                        <td><h5 class="pending">Pending</h5></td>
                    </tr>
                    <tr>
                        <td>Sinandomeng</td>
                        <td>San Jose, Batangas</td>
                        <td>06/23/2022</td>
                        <td>Paid</td>
                        <td><h5 class="in-progress">In Progress</h5></td>
                    </tr>
                    <tr>
                        <td>Sinandomeng</td>
                        <td>San Jose, Batangas</td>
                        <td>06/23/2022</td>
                        <td>Paid</td>
                        <td><h5 class="returned">Returned</h5></td>
                    </tr>
                    <tr>
                        <td>Sinandomeng</td>
                        <td>San Jose, Batangas</td>
                        <td>06/23/2022</td>
                        <td>Paid</td>
                        <td><h5 class="delivered">Delivered</h5></td>
                    </tr>
                    <tr>
                        <td>Sinandomeng</td>
                        <td>San Jose, Batangas</td>
                        <td>06/23/2022</td>
                        <td>Paid</td>
                        <td><h5 class="returned">Returned</h5></td>
                    </tr>
                    <tr>
                        <td>Sinandomeng</td>
                        <td>San Jose, Batangas</td>
                        <td>06/23/2022</td>
                        <td>Paid</td>
                        <td><h5 class="in-progress">In Progress</h5></td>
                    </tr>
                    <tr>
                        <td>Sinandomeng</td>
                        <td>San Jose, Batangas</td>
                        <td>06/23/2022</td>
                        <td>Paid</td>
                        <td><h5 class="in-progress">In Progress</h5></td>
                    </tr>
                </table>
</div>

<!------------------------------------Shipments------------------------->

<div class="main-content" data-content="3">
    <div class="content-title"><h4>Shipments</h4></div>
    <ul class="shipments-top-links">
        <li>All</li>
        <li>Unpaid</li>
        <li class="active">To ship</li>
        <li>Shipping</li>
        <li>Completed</li>
        <li>Cancellation</li>
        <li>Return/Refund</li>
    </ul>

    <form action="" class="shipment-orders">
        <input type="search" placeholder="Search orders" class="search-order-box">
        <div class="search-orders-right">
            <label for="">Order creation date: </label>
            <input type="date">
            <button>Export</button>
        </div>
    </form>


    <div class="shipments-content">
        <div class="shipments-side-bar">
            <ul class="shipments-side-bar-links">
                <li>All</li>
                <li>To Process</li>
                <li>Processed</li>
            </ul>
        </div>
        <div class="shipments-information">
            <div class="shipments-top-information">
                <h3>0 Orders</h3>
                <div class="commands">
                    <button>Sort by</button>
                    <button>Mass Ship</button>
                </div>
            </div>
            <div class="shipments-information-nav">
                <li>Product(s)</li>
                <li>Total Price</li>
                <li>Status</li>
                <li>Countdown</li>
                <li>All Channels</li>
                <li>Actions</li>
            </div>
        </div>
    </div>
</div>
<!------------------------------------Products------------------------->

<div class="main-content active" data-content="4">
    <div class="content-title"><h4>Products</h4></div>


    <!-----------Adding new product----------->
    <form action="backend/add_product.php" method="post">
        <div class="products-top-info">
            <h3>Add New Product</h3>
            <p>Please choose the right category for your product</p>
        </div>

        <div class="product-basic-info">
            <h3>Basic Information</h3>
            <div class="product-name">
                <label>Product name: </label>
                <input type="text" placeholder="Enter product name" name="name">
            </div>
            <div class="product-desc">
                <label for="product-desc">Product Description: </label>
                <input type="text" name="description" placeholder="Enter product description">
            </div>
            <div class="product-desc">
                <label for="product-desc">Price: </label>
                <input type="text" name="price" placeholder="Enter price">
            </div>

            <!-- TODO: GET IMAGE FROM FILE -->
            <div class="product-img">
                <label for="product-img">Product Image: </label>
                <span><p>+</p></span>
                <span><p>+</p></span>
                <span><p>+</p></span>
                <span><p>+</p></span>
                <span><p>+</p></span>
                <span><p>+</p></span>
                <span><p>+</p></span>
            </div>
            <div class="product-category">
                <label for="">Category:</label>
                <select name="category" id="">
                    <option value="Maharlika">Maharlika</option>
                    <option value="Sinandomeng">Sinandomeng</option>
                </select>
            </div>
            <!-- <div class="product-warning">
                <label for="">*Dangerous goods <i class='bx bxs-no-entry' ></i></label>
                <input type="radio"><p>No</p>
                <input type="radio"><p>Items regulated by select couriers</p>

            </div> -->
            
        </div>
        <div class="product-specification">
            <h3>Specification</h3>
            <p>Complete: 0 / 12. Fill in more attributes to boost the exposure of your product. <a href="#">How to set attribute.</a></p>
            <div class="product-specification-content">
                <div class="left">
                    <div class="left-row">
                        <label for="">Brand</label>
                        <select name="brand" id="">
                            <option value="">Please select</option>
                            <option value="BRAND 1">BRAND 1</option>
                        </select>
                    </div>
                    <div class="left-row">
                        <label for="">Country Origin</label>
                        <select name="country_origin" id="">
                            <option value="">Please select</option>
                            <option value="Country 1">Country 1</option>
                        </select>
                    </div>
                    <!-- <div class="left-row">
                        <label for="">Vegetable Type</label>
                        <select name="" id="">
                            <option value="">Please select</option>
                        </select>
                    </div> -->
                    <div class="left-row">
                        <label for="">Weight</label>
                        <select name="weight" id="">
                            <option value="">Please select</option>
                            <option value="999 KG">999 KG</option>
                        </select>
                    </div>
                    <div class="left-row">
                        <label for="">FDA Registration No.</label>
                        <input type="text" placeholder="Please input" name="fda_number">
                    </div>
                </div>
                <div class="right">
                <div class="right-row">
                        <!-- <label for="">Shelf Life</label>
                        <select name="" id="">
                            <option value="">Please select</option>
                        </select>
                    </div>
                    <div class="right-row">
                        <label for="">Storage Type</label>
                        <select name="" id="">
                            <option value="">Please select</option>
                        </select>
                    </div>
                    <div class="right-row">
                        <label for="">Expiry Date</label>
                        <input type="date">
                    </div>
                    <div class="right-row">
                        <label for="">Dietary Needs</label>
                        <select name="" id="">
                            <option value="">Please select</option>
                        </select>
                    </div>
                    <div class="right-row">
                        <label for="">Ingredients</label>
                        <input type="number" placeholder="Please input">
                    </div> -->
                </div>
            </div>
        </div>

        <div class="products-actions">
            <input type="submit" value="Apply" id="btnApply">
        </div>
    </form>


    <!-- <div class="product-sales-info">
        <h3>Sales Information</h3>
        <div class="product-sales-info-content">
            <div class="sales-info-content-row">
                <label for="">Variations</label>
                <span><p>+</p><p>Enable Variations</p></span>
            </div>
            <div class="sales-info-content-row">
                <label for="">* Price</label>
                <input type="text" placeholder="Input">
            </div>
            <div class="sales-info-content-row">
                <label for="">* Stock</label>
                <input type="text" placeholder="0">
            </div>
            <div class="sales-info-content-row">
                <label for="">Wholesale</label>
                <span><p>+</p><p>Add Price Tier</p></span>
            </div>
            <p>Wholesale will be hidden when product is under Add-on Deal or Bundle Deal.</p>
        </div>
        
    </div>
    <div class="product-shipping">
        <h3>Shipping</h3>

        <div class="product-shipping-content">
            <div class="shipping-content-row">
                <label for="">* Weight</label>
                <input type="text" placeholder="kg">
            </div>
            <div class="shipping-content-row">
                <label for="">Parcel Size</label>
                <input type="text" placeholder="width (cm)">
                <input type="text" placeholder="length (cm)">
                <input type="text" placeholder="height (cm)">
            </div>
            <div class="shipping-content-row">
                <label for="">Shipping Fee</label>
                <div class="row-container">
                    <div class="top">
                        <h4>Enable at least one shipping option.</h4>
                        <p>Product cannot be saved with no shipping options enabled.</p>
                        <p>You can also <a href="">click here</a> to open more shipping channels for your product. </p>
                    </div>
                    <div class="middle">
                        <div class="middle-left">
                            <h3><i class='bx bx-chevron-right'></i> Standard Local</h3>
                            <p>Shopping Supported Logistics</p>
                        </div>
                        <h3>The channel is not supported</h3>
                        <span></span>
                    </div>
                    <p>* Shipping settings will be available for this product only. Shipping fees displayed are based rates and will be subject
                        to change depending on buyer and seller location. Economy Local base rates shown are only applicable to sellers in Metro Manila (and select Luzon cities) for 
                        shipments to Vismin, which will be 30% cheaper than Standard Local. Kindly contact your Relationship Manager to know more about
                        Economy Local and how to activate it.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="product-others">
        <h3>Others</h3>

        <div class="product-others-content">
            <div class="others-content-row">
                <label for="">Pre-Order</label>
                <input type="radio"><span>No</span>
                <input type="radio"><span>Yes</span>
            </div>
            <p>I will ship out within two business days. (Excluding public holidays and couriers service non-working days)</p>
            <div class="others-content-row">
                <label for="">Condition</label>
                <select name="" id="">
                    <option value="">New</option>
                </select>
            </div>
            <div class="others-content-row">
                <label for="">Parent SKU</label>
                <input type="text">
            </div>
        </div>
    </div> -->
</div>

<!------------------------------------Customers------------------------->

<div class="main-content" data-content="5">
    <div class="content-title"><h4>Customers</h4></div>
</div>
<!------------------------------------Messages------------------------->

<div class="main-content" data-content="6">
    <div class="content-title"><h4>Messages</h4></div>
</div>
<!------------------------------------Help------------------------->

<div class="main-content" data-content="7">
    <div class="content-title"><h4>Ask for help!</h4></div>
</div>


    </div>

    <script src="javascript/seller-centre.js"></script>
</body>
</html>