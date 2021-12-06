<html>
    <head>
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="items.css">
    </head>
    <body>
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
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Items</a></li>
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
        <div id="content-container">
            <div id="filter-container">
                <div id="header">
                    <h2>Filter</h2>
                    <h4>Clear Filter</h4>
                </div>

                <h4 id="type-header">Type</h4>
                <div id="type-content">
                    <div id="item">
                        <input type="checkbox" name="basmati-rice" id="">
                        <label for="basmati-rice">Basmati Rice</label>
                    </div>
                    <div id="item">
                        <input type="checkbox" name="black-rice" id="">
                        <label for="black-rice">Black Rice</label>
                    </div>
                    <div id="item">
                        <input type="checkbox" name="jasmin-rice" id="">
                        <label for="jasmin-rice">Jasmine Rice</label>
                    </div>
                    <div id="item">
                        <input type="checkbox" name="brown-rice" id="">
                        <label for="brown-rice">Brown Rice</label>
                    </div>
                </div>

                <h4 id="type-header">Brand</h4>
                <div id="type-content">
                    <div id="item">
                        <input type="checkbox" name="brand-1" id="">
                        <label for="brand-1">Brand 1</label>
                    </div>
                    <div id="item">
                        <input type="checkbox" name="brand-2" id="">
                        <label for="brand-2">Brand 2</label>
                    </div>
                    <div id="item">
                        <input type="checkbox" name="brand-3" id="">
                        <label for="brand-3">Brand 3</label>
                    </div>
                    <div id="item">
                        <input type="checkbox" name="brand-4" id="">
                        <label for="brand-4">Brand 4</label>
                    </div>
                </div>

            </div>

            <!-- BLACK LINE SEPARATOR-->
            <div id="filter-rice-separator"></div>

            <div id="rice-container">
                <div id="header">
                    <h1>9999 Rice</h1>
                    <select name="price-filter" id="price-filter">
                        <option value="lowest-price">Lowest Price</option>
                        <option value="highest-price">Highest Price</option>
                        <option value="latest">Latest</option>
                    </select>
                </div>
                <div id="content">
                    <div id="item">
                        <div id="details">
                            <h5>Dinorado</h5>
                            <h5>P999.00</h5>
                        </div>
                    </div>
                    <div id="item">
                        <div id="details">
                            <h5>Dinorado</h5>
                            <h5>P999.00</h5>
                        </div>
                    </div>
                    <div id="item">
                        <div id="details">
                            <h5>Dinorado</h5>
                            <h5>P999.00</h5>
                        </div>
                    </div>
                    <div id="item">
                        <div id="details">
                            <h5>Dinorado</h5>
                            <h5>P999.00</h5>
                        </div>
                    </div>
                    <div id="item">
                        <div id="details">
                            <h5>Dinorado</h5>
                            <h5>P999.00</h5>
                        </div>
                    </div><div id="item">
                        <div id="details">
                            <h5>Dinorado</h5>
                            <h5>P999.00</h5>
                        </div>
                    </div><div id="item">
                        <div id="details">
                            <h5>Dinorado</h5>
                            <h5>P999.00</h5>
                        </div>
                    </div><div id="item">
                        <div id="details">
                            <h5>Dinorado</h5>
                            <h5>P999.00</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>