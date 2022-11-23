<?php
$conn = mysqli_connect("localhost","root","","multiuser");
$user = query("SELECT * FROM tbuser");

function query($query){ 
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }

    return $rows;
}
function registrasi($data) {
    global $conn;

    $username = (strtolower(stripslashes($data["username"])));
    $email = (strtolower(stripslashes($data["email"])));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $result = mysqli_query($conn, "SELECT email FROM tbuser WHERE email='$email'");

    if(mysqli_fetch_assoc($result)){
        echo"<script>
        alert('email sudah terdaftar, silakan coba lagi');
        </script>";
        return false;
    }
  

  
    $password = password_hash($password, PASSWORD_DEFAULT);   

 

    mysqli_query($conn, "INSERT INTO tbuser VALUES");

    return mysqli_affected_rows($conn);
}

?>

