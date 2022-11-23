 <?php

$conn = mysqli_connect("localhost","root","","db_provider");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data){
    global $conn;

    $nama = htmlspecialchars($data["provider_name"]);
    $paket = htmlspecialchars($data["customer_packet"]);
    $desc = htmlspecialchars($data["description"]);
    $price = htmlspecialchars($data["price"]);
    $active = htmlspecialchars($data["active_on"]);

    $query = "INSERT INTO tb_provider_internet
            VALUES
            ('','$nama','$paket','$desc','$price','$active')
        ";
        
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM tb_provider_internet WHERE id_provider = $id");

    return mysqli_affected_rows($conn);

}

function ubah($data){
    global $conn;
    
    $id = $data["id_provider"];
    $nama = htmlspecialchars($data["provider_name"]);
    $paket = htmlspecialchars($data["costumer_packed"]);
    $desc = htmlspecialchars($data["description"]);
    $price = htmlspecialchars($data["price"]);
    $active = htmlspecialchars($data["active_on"]);

    $query = "UPDATE tb_provider_internet SET
                    provider_name = '$nama',
                    costumer_packed = '$paket',
                    description = '$desc',
                    price = '$price',
                    active_on = '$active'

                WHERE id_provider = $id
                ";
        
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}

?>