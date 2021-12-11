<?php
    require 'connect.php';
    

    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM User WHERE email = '".$email."'";
        $result = mysqli_query(
            $sql,
            $query,
        );

        if(mysqli_num_rows($result) > 0){
            $rows = mysqli_fetch_all($result);
            $rowLen = count($rows);

            for($index = 0; $index < $rowLen; $index++){
                $encrpytedPassword = $rows[$index][4];

                if(password_verify($password, $encrpytedPassword)){
                    echo "Login successfully";
                    echo $rows[$index][1];

                    session_start();
                    $_SESSION['fname']=$rows[$index][1];
                    $_SESSION['lname']=$rows[$index][2];
                    $_SESSION['email']=$rows[$index][3];
                    $_SESSION['profile_image']=$rows[$index][11];
                    $_SESSION['id']=$rows[$index][0];
                    // header('location: main.php');
                    break;
                }
                else if($index == ($rowLen - 1)){
                    // echo "Incorrect password";
                }
            }
        }
        else{
            echo "Error on login: ";
            echo $sql -> error;
        }
    }
    else{
        echo "!";
    }
?>