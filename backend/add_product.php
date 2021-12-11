<?php
    require 'connect.php';

    if(isset($_POST['name'])){
        // POST VARIABLES
        $name = $_POST['name'];
        $desc = $_POST['description'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        $brand = $_POST['brand'];
        $country = $_POST['country_origin'];
        $weight = $_POST['weight'];
        $fda_number = $_POST['fda_number'];

        // CREATE TABLE QUERY
        $tableQuery = "CREATE TABLE Product (id INT(10) AUTO_INCREMENT PRIMARY KEY, name VARCHAR(100) NOT NULL, description VARCHAR(100) NOT NULL, price VARCHAR(100) NOT NULL, category VARCHAR(100) NOT NULL, image VARCHAR(100) NOT NULL, brand VARCHAR(100) NOT NULL, country_origin VARCHAR(100) NOT NULL, weight VARCHAR(100) NOT NULL, fda_number VARCHAR(100) NOT NULL)";

        mysqli_query(
            $sql,
            $tableQuery
        );

        // INSERT DATA
        $insertQuery = 'INSERT INTO Product (name, description, price, category, image, brand, country_origin, weight, fda_number)
        VALUES ("'.$name.'", "'.$desc.'", '.$price.', "'.$category.'", "image.png", "'.$brand.'", "'.$country.'", "'.$weight.'", "'.$fda_number.'")';

        $result = mysqli_query(
            $sql,
            $insertQuery
        );

        if($result){
            // echo "INSERT SUCCESS";
            echo "<script>window.location.href = '../seller-centre.php';</script>";
        }
        else{
            echo "DI GUMANA FAK";
        }
    }
    else{
        echo "Missing Fields!";
    }



?>