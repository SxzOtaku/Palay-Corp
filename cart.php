<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page</title>
    <link rel="stylesheet" href="cart.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <script>
        function removeItem(){
            document.getElementById('cart-item-1').remove();
        }
    </script>

</head>

<script>
    function subtractQuantity(){
        var quantity = document.getElementById('quantity-maharlika');
        var value = parseInt(quantity.value);

        if(!value < 1){
            quantity.value = value - 1;
        }}
    
</script>

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
            <table>
                <tr>
                    <th>Product</th>
                    <th>Unit Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Actions</th>
                </tr>
                <tr id="cart-item-1">
                    <td>
                        <div class="purchase">
                            <img src="images/maharlika.png" alt="">
                            <p>Maharlika</p>
                        </div>
                    </td>
                    <td>P1,200.00</td>
                    <td>
                        <button id="subBtn-maharlika">-</button>
                        <input type="text" id="quantity-maharlika" value="1">
                        <button id="addBtn-maharlika">+</button>
                    </td>
                    <td id="total-maharlika">P 1,200.00</td>
                    <td>
                        <!-- <button onclick="removeItem()" style="background-color: white;height:0px;width:0px;margin-right: 50px;border-color: white;">Remove</button> -->
                        <h4 onclick="removeItem()" id="removeBtn">Remove</h4>
                        <!-- <select name="" id="">
                            <option value="">Find similar</option>
                        </select> -->
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="purchase">
                            <img src="images/sinandomeng.jpg" alt="">
                            <p>Sinandomeng</p>
                        </div>
                    </td>
                    <td>P1,200.00</td>
                    <td>
                        <button id="subBtn">-</button>
                        <input type="text" id="quantity" value="1">
                        <button id="addBtn">+</button>
                    </td>
                    <td>P 1,200.00</td>
                    <td>
                        <a href="#">Delete</a>
                        <select name="" id="">
                            <option value="">Find similar</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="purchase">
                            <img src="images/maharlika.png" alt="">
                            <p>Maharlika</p>
                        </div>
                    </td>
                    <td>P1,200.00</td>
                    <td>
                        <button>-</button>
                        <input type="text" value="1">
                        <button>+</button>
                    </td>
                    <td>P 1,200.00</td>
                    <td>
                        <a href="#">Delete</a>
                        <select name="" id="">
                            <option value="">Find similar</option>
                        </select>
                    </td>
                </tr>
            </table>
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