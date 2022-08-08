<?php
$koneksi    = mysqli_connect("localhost", "root", "", "catata33_575");
$level_     = mysqli_query($koneksi, "SELECT level_ FROM btc order by ID asc");
$tanggal     = mysqli_query($koneksi, "SELECT tanggal FROM btc order by ID asc");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Chart Table BTC</title>
    <script src="js/Chart.js"></script>
    <style type="text/css">
            .container {
                width: 40%;
                margin: 15px auto;
            }
    </style>
  </head>
  <body>

    <div class="container">
        <canvas id="linechart" width="800" height="1000"></canvas>
    </div>

  </body>
</html>

<script  type="text/javascript">
  var ctx = document.getElementById("linechart").getContext("2d");
  var data = {
            labels: ['Crash1', 'Crash2', 'SuperCrash1', 'SuperCrash2', 'Recover1', 'Recover2', 'Wajar1', 'Wajar2', 'sama '],
            datasets: [
            {
              label: "Tanggal",
              data: [
                <?php
                  $tgl = mysqli_query($koneksi, "SELECT tanggal FROM btc WHERE level_ = 'Crash1'");
                  $jmlh = mysqli_num_rows($tgl); 
                  echo $jmlh;
                ?>,
                <?php
                  $tgl = mysqli_query($koneksi, "SELECT tanggal FROM btc WHERE level_ = 'Crash2'");
                  $jmlh = mysqli_num_rows($tgl); 
                  echo $jmlh;
                ?>,
                <?php
                  $tgl = mysqli_query($koneksi, "SELECT tanggal FROM btc WHERE level_ = 'SuperCrash1'");
                  $jmlh = mysqli_num_rows($tgl); 
                  echo $jmlh;
                ?>,
                <?php
                  $tgl = mysqli_query($koneksi, "SELECT tanggal FROM btc WHERE level_ = 'SuperCrash1'");
                  $jmlh = mysqli_num_rows($tgl); 
                  echo $jmlh;
                ?>,
                <?php
                  $tgl = mysqli_query($koneksi, "SELECT tanggal FROM btc WHERE level_ = 'Recover1'");
                  $jmlh = mysqli_num_rows($tgl); 
                  echo $jmlh;
                ?>,
                <?php
                  $tgl = mysqli_query($koneksi, "SELECT tanggal FROM btc WHERE level_ = 'Recover2'");
                  $jmlh = mysqli_num_rows($tgl); 
                  echo $jmlh;
                ?>,
                <?php
                  $tgl = mysqli_query($koneksi, "SELECT tanggal FROM btc WHERE level_ = 'Wajar1'");
                  $jmlh = mysqli_num_rows($tgl); 
                  echo $jmlh;
                ?>,
                <?php
                  $tgl = mysqli_query($koneksi, "SELECT tanggal FROM btc WHERE level_ = 'Wajar2'");
                  $jmlh = mysqli_num_rows($tgl); 
                  echo $jmlh;
                ?>,
                <?php
                  $tgl = mysqli_query($koneksi, "SELECT tanggal FROM btc WHERE level_ = 'sama'");
                  $jmlh = mysqli_num_rows($tgl); 
                  echo $jmlh;
                ?>
              ],
              borderColor: 'rgb(75, 192, 192)'
            }
            ]
          };

          var myBarChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: {
            legend: {
              display: true
            },
            barValueSpacing: 10,
            scales: {
              yAxes: [{
                  ticks: {
                      min: 0,
                  }
              }],
              xAxes: [{
                          gridLines: {
                              color: "rgba(0, 0, 0, 0)",
                          }
                      }]
              }
          }
        });
</script>