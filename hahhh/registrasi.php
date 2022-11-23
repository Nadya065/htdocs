<?php

require 'function.php';

if( isset($_POST["register"])) {
    if( registrasi($_POST) > 0){
        echo"<script>
        alert('user baru berhasil ditambahkan');
        </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman registrasi</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    
<h1>Halaman Registrasi</h1>

<form action="" method="post">
<ul>
    <li>
        <label for="username">Username : </label>
        <input type="text" name="username" id="username">
    </li>
    <li>
        <label for="email">Email : </label>
        <input type="text" name="email" id="email">
    </li>
    <li>
        <label for="password">Password : </label>
        <input type="password" name="password" id="password">
    </li>
    <li>
        <button type="submit" name="register">masuk</botton>
    </li>
    <br></br>
    <li>
    sudah punya akun? <a href="login.php">ayo login!</a>
    </li>
</ul>    


</form>

</body>
</html>