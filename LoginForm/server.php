<?php 
    session_start();

    $login = "";
    $errors = array();

    $password_1 = "";
    $password_2 = "";

    $db = mysqli_connect("localhost", "root", "", "task2");

    if (isset($_POST['register'])) {
        $login =$_POST['login'];
        $password_1 =$_POST['password_1'];
        $password_2 = $_POST['password_2'];
    }

    if (empty($login)) {
        array_push($errors, "Username is required");
    }

    if (empty($password_1)) {
        array_push($errors, "Password is required");
    }

    if ($password_1 != $password_2) {
        array_push($errors, "Passwords do not match");
    }

    if (count($errors) == 0) {
        $password = md5($password_1);
        $sql = "INSERT INTO users2 (login, password) VALUES ('$login', '$password')";

        mysqli_query($db, $sql);  

        $_SESSION['login'] = $login;
        $_SESSION['success'] = "You are now logged in" ;
        header('location: index.php');
    }





    if (isset($_POST['log'])) {

        
            $login =$_POST['login'];
            $password =$_POST['password'];
        

        if (empty($login)) {
            array_push($errors, "Username is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        } 
        if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users2 WHERE login = '$login' AND password = '$password'";
        $result = mysqli_query($db, $query); 

            if (mysqli_num_rows($result) == 1) {
            
                $_SESSION['login'] = $login;
                $_SESSION['success'] = "You are now logged in" ;
                header('location: index.php');
            }else{
                array_push($errors, "wrong login/password");
            }
        }
    }




    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['login']); 
        header('location: login.php');
    }
 ?>