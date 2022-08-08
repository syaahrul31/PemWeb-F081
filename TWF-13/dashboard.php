<?php
    //menyisipkan file koneksi.php
    include("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>DASHBOARD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
 
<body>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="dashboard.php">Dashboard</a>    
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php">BTC</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="chart.php">Line Chart</a>
        </li>
    </ul>
    <br><h1 style="text-align:center;">DASHBOARD</h1><br>
</body>