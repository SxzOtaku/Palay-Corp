<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link rel="stylesheet" href="product.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <script>
        function goToCart(){
            window.location.href = "cart.php";
        }

        function buyProduct() {
            var popup = document.getElementById('popup');

            // ANIMATION COMPONENTS 
            var checkmark = document.getElementById('checkmark');
            var checkmark__circle = document.getElementById('checkmark__circle');
            var checkmark__check = document.getElementById('checkmark__check');

            // START ANIMATION
            checkmark.classList.add('checkmarkAnimation');
            checkmark.classList.add('checkmarkAnimation2');
            checkmark__circle.classList.add('checkmarkCircleAnimation');
            checkmark__check.classList.add('checkmarkCheckAnimation');

            popup.style.visibility = "visible";

            // AFTER 2 SEC HIDE POPUP
            setTimeout(function(){
                popup.style.visibility = "hidden";
                window.location.href = "cart.php";
            }, 2000);
        }

        function subtractQuantity(){
            var quantity = document.getElementById('product-quantity');
            var value = parseInt(quantity.value);

            if(value <= 0){
                quantity.value = 0;
            }
            else{
                quantity.value = value - 1;
            }
        }

        function addQuantity(){
            var quantity = document.getElementById('product-quantity');
            var value = parseInt(quantity.value);
            quantity.value = value + 1;
        }
    </script>

</head>
<body>
    <!-- POP UP -->
    <div id="popup">
        <div class="wrapper">
            <svg id="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                <circle id="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                <path id="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
            </svg>
            <h2>Success</h2>
        </div>
    </div>
    <!-- POP UP END -->
    <header>
        <div class="logo">
            <img src="images/agri-icon.png" alt="logo">
            <h3>Palay <span>CORP</span></h3> 
        </div>
    </header>
    <div class="product-content">
        <div class="product-img-small">
            <span><img src="images/rice-grain1.jpg" alt=""></span>
            <span><img src="images/rice-grain2.jpg" alt=""></span>
            <span><img src="images/rice-grain3.jpg" alt=""></span>
            <span><img src="images/rice-grain4.jpg" alt=""></span>
        </div>
        <div class="product-img-big">
            <img src="images/dinorado25kg.png" alt="">
        </div>
        <div class="product-information">
            <h4 class="product-name">Dinorado</h4>
            <span class="product-rating">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
            </span>
            <h4 class="product-price">P 899</h4>
            <div class="product-attributes">
                <select name="" id="">
                    <option value="">25 kg</option>
                    <option value="">50 kg</option>
                </select>
               
            </div>
            <p class="product-description">Dinorado in Philippine Market that has a variety of un-husked rice that is very aromatic and usually more expensive than other rice varieties from the Philippines</p>
            <div class="product-actions">
                <div class="quantity">
                    <button onclick="subtractQuantity()">-</button>
                    <input type="text" value="1" id="product-quantity" name="product-quantity">
                    <button onclick="addQuantity()">+</button>
                </div>
                <button class="add-to-cart" onclick="goToCart()"><i class='bx bx-cart-alt' ></i>   Add to cart</button>
                <!-- <button class="add-to-wishlist"><i class='bx bx-plus'></i>   Add to wishlist</button> -->
                <button class="buy-now" onclick="buyProduct()">Buy Now</button>
            </div>
        </div>
    </div>
</body>
</html>