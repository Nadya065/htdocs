<?php

require 'function.php';

$id_ujian = $_GET["id_ujian"];

if( hapus($id_ujian) > 0 ){
    echo "
            <script>
                alert('Data berhasil dihapus');
                document.location.href = 'index.php';
            </script>
        ";
} else {
    echo "
            <script>
                alert('Data berhasil dihapus');
                document.location.href = 'index.php';
            </script>
        ";
}


?>