<?php
    //inisialisasi database
    $databaseHost = 'localhost';
    $databaseName = 'catata33_575';
    $databaseUsername = 'root';
    $databasePassword = '';
    
    //menggunakan mysqli_connect untuk koneksi database
    $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
    //check koneksi
    if (mysqli_connect_errno()){
        echo "<div class='alert alert-danger'><strong>Danger!</strong> Koneksi Database Gagal! : </div>" . mysqli_connect_error();
    } else{
        echo "<div class='alert alert-success'><strong>Success!</strong> Koneksi Database Berhasil!</div>";
    }
?>
