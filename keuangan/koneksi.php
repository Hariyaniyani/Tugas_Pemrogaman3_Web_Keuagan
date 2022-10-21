<?php
    $koneksi = mysqli_connect("localhost","root","","keuangan");

    // check connection
if (mysqli_connect_errno() ) {
    echo "koneki database gagal : " . mysqli_connect_error();
}else{
    echo "koneksi berhasl";
}

?>