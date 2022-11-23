<?php
$conn = mysqli_connect("localhost","root","","dbmovie");

function query($query){ 
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }

    return $rows;
}
function tambah($data){
    global $conn;

    $nama = htmlspecialchars($data["movie_title"]);
    $time = htmlspecialchars($data["movie_time"]);
    $bahasa = htmlspecialchars($data["movie_language"]);
    $tanggal = htmlspecialchars($data["movie_release_date"]);
    $negara = htmlspecialchars($data["movie_release_country"]);

    
    $query = "INSERT INTO tbmovie
            VALUES
            ('','$nama','$time','$bahasa','$tanggal','$negara')
        ";
        
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
        
    return query($query);
}
function hapus($movie_id){
    global $conn;
    mysqli_query($conn, "DELETE FROM tbmovie WHERE movie_id = $movie_id");

    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;

    $movie_id = $data["movie_id"];
    $nama = htmlspecialchars($data["movie_title"]);
    $time = htmlspecialchars($data["movie_time"]);
    $bahasa = htmlspecialchars($data["movie_language"]);
    $tanggal = htmlspecialchars($data["movie_release_date"]);
    $negara = htmlspecialchars($data["movie_release_country"]);
    $query = "UPDATE tbmovie SET

    movie_title = '$nama',
    movie_time = '$time',
    movie_language = '$bahasa',
    movie_release_date = '$tanggal',
    movie_release_country = '$negara'
 
    WHERE movie_id = $movie_id
    ";

    mysqli_query($conn, $query);

}
function cari($keyword) {
    $query = "SELECT * FROM tbmovie
            WHERE
            movie_title LIKE '%$keyword%' OR
            movie_time LIKE '%$keyword%' OR
            movie_language LIKE '%$keyword%' OR
            movie_release_date LIKE '%$keyword%' OR
            movie_release_country LIKE '%$keyword%'
    ";
    return query($query);
}
?>