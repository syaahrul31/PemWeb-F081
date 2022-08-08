<?php
$koneksi    = mysqli_connect("localhost", "root", "", "catata33_575");
$jenis       = mysqli_query($koneksi, "SELECT jenis FROM btc order by ID asc");
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
        <canvas id="linechart" width="200" height="200"></canvas>
    </div>

  </body>
</html>

<script  type="text/javascript">
  var ctx = document.getElementById("linechart").getContext("2d");
  var data = {
            labels: ['Crash', 'Moon'],
            datasets: [
            {
              label: "Level & Tanggal",
              data: [
                <?php
                  $tglcrash1 = mysqli_query($koneksi, "SELECT tanggal FROM btc WHERE level_ = 'Crash1' AND jenis='crash'");
                  $jmlh1 = mysqli_num_rows($tglcrash1); 
               
                  $tglcrash2 = mysqli_query($koneksi, "SELECT tanggal FROM btc WHERE level_ = 'Crash2' AND jenis='crash'");
                  $jmlh2 = mysqli_num_rows($tglcrash2); 
               
                  $tglscrash1 = mysqli_query($koneksi, "SELECT tanggal FROM btc WHERE level_ = 'SuperCrash1' AND jenis='crash'");
                  $jmlh3 = mysqli_num_rows($tglscrash1); 
                
                  $tglscrash2 = mysqli_query($koneksi, "SELECT tanggal FROM btc WHERE level_ = 'SuperCrash1' AND jenis='crash'");
                  $jmlh4 = mysqli_num_rows($tglscrash2); 
                
                  $tglreco1 = mysqli_query($koneksi, "SELECT tanggal FROM btc WHERE level_ = 'Recover1' AND jenis='crash'");
                  $jmlh5 = mysqli_num_rows($tglreco1); 
                
                  $tglreco2 = mysqli_query($koneksi, "SELECT tanggal FROM btc WHERE level_ = 'Recover2' AND jenis='crash'");
                  $jmlh6 = mysqli_num_rows($tglreco2); 
                
                  $tglwajar1 = mysqli_query($koneksi, "SELECT tanggal FROM btc WHERE level_ = 'Wajar1' AND jenis='crash'");
                  $jmlh7 = mysqli_num_rows($tglwajar1); 
                
                  $tglwajar2 = mysqli_query($koneksi, "SELECT tanggal FROM btc WHERE level_ = 'Wajar2' AND jenis='crash'");
                  $jmlh8 = mysqli_num_rows($tglwajar2); 
               
                  $tglsama = mysqli_query($koneksi, "SELECT tanggal FROM btc WHERE level_ = 'sama' AND jenis='crash'");
                  $jmlh9 = mysqli_num_rows($tglsama); 
                  $total= $jmlh1+$jmlh2+$jmlh3+$jmlh4+$jmlh5+$jmlh6+$jmlh7+$jmlh8+$jmlh9;
                  echo $total;
                ?>
               , 
               <?php
                  $tglcrash1 = mysqli_query($koneksi, "SELECT tanggal FROM btc WHERE level_ = 'Crash1' AND jenis='moon'");
                  $jmlh1 = mysqli_num_rows($tglcrash1); 
               
                  $tglcrash2 = mysqli_query($koneksi, "SELECT tanggal FROM btc WHERE level_ = 'Crash2' AND jenis='moon'");
                  $jmlh2 = mysqli_num_rows($tglcrash2); 
               
                  $tglscrash1 = mysqli_query($koneksi, "SELECT tanggal FROM btc WHERE level_ = 'SuperCrash1' AND jenis='moon'");
                  $jmlh3 = mysqli_num_rows($tglscrash1); 
                
                  $tglscrash2 = mysqli_query($koneksi, "SELECT tanggal FROM btc WHERE level_ = 'SuperCrash1' AND jenis='moon'");
                  $jmlh4 = mysqli_num_rows($tglscrash2); 
                
                  $tglreco1 = mysqli_query($koneksi, "SELECT tanggal FROM btc WHERE level_ = 'Recover1' AND jenis='moon'");
                  $jmlh5 = mysqli_num_rows($tglreco1); 
                
                  $tglreco2 = mysqli_query($koneksi, "SELECT tanggal FROM btc WHERE level_ = 'Recover2' AND jenis='moon'");
                  $jmlh6 = mysqli_num_rows($tglreco2); 
                
                  $tglwajar1 = mysqli_query($koneksi, "SELECT tanggal FROM btc WHERE level_ = 'Wajar1' AND jenis='moon'");
                  $jmlh7 = mysqli_num_rows($tglwajar1); 
                
                  $tglwajar2 = mysqli_query($koneksi, "SELECT tanggal FROM btc WHERE level_ = 'Wajar2' AND jenis='moon'");
                  $jmlh8 = mysqli_num_rows($tglwajar2); 
               
                  $tglsama = mysqli_query($koneksi, "SELECT tanggal FROM btc WHERE level_ = 'sama' AND jenis='moon'");
                  $jmlh9 = mysqli_num_rows($tglsama); 
                  $total= $jmlh1+$jmlh2+$jmlh3+$jmlh4+$jmlh5+$jmlh6+$jmlh7+$jmlh8+$jmlh9;
                  echo $total;
                ?>
                ],
                borderColor: 'rgb(153, 0, 204)'
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