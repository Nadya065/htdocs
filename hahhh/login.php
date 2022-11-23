<?php
session_start();
require 'function.php';

if(isset($_SESSION["login"])){
    header("location: index.php");
    exit;
}

if(isset($_POST["login"])) {
    $password = $_POST["password"];
    $email = $_POST["email"];

    $result = mysqli_query($conn, "SELECT * FROM tbuser WHERE email='$email'");

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if( password_verify ($password, $row["password"])){
           
            $_SESSION["login"] = true;
            $_SESSION["username"] = true;
            $_SESSION["level"] = true;
            header("Location: index.php");
            exit;
        }
    }   
        $error = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>halaman login</title>
</head>
<body>
    <h1>halaman login</h1>
    <?php if( isset($error)) :?>
        <p style="color: red; font-style: italic;">email atau password salah silakan coba lagi</p>
    <?php endif;?>

    <form action="" method="post">
        <ul>
            <li>
            <label for="email">Email :</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
            <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="login">login</button>
            </li>
            <br></br>
            <li>  
            Belum punya akun? <a href="registrasi.php">ayo daftar!</a>
            </li>
        </ul>
    </form>
  
    
</body>
</html> 