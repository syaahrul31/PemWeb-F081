<?php
    //menyisipkan file koneksi.php
    include("koneksi.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Grafik BTC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php">BTC</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="chart.php">Line Chart</a>    
        </li>
    </ul>
 
<div class="container">
  <br><h1 style="text-align:center;">Grafik Sinyal Harian INDODAX</h1><br>
  <div class="row">
    <div class="col-sm-6">
      <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading" align="center">Grafik Level & Tanggal</div>
          <div class="panel-body"><iframe src="line1.php" width="100%" height="250"></iframe></div>
        </div>
      </div>
    </div>

    <div class="col-sm-6">
      <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading" align="center">Grafik Level & Tanggal menurut Jenis</div>
          <div class="panel-body"><iframe src="line2.php" width="100%" height="250"></iframe></div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
