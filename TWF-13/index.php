<?php
    //menyisipkan file koneksi.php
    include("koneksi.php");
    include("fungsi.php");
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Pengumpulan data BTC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
 
<body>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">BTC</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="chart.php">Line Chart</a>
        </li>
    </ul>

    <div class="container">
        <br><h1 style="text-align:center;">Penambangan Sinyal Harian INDODAX</h1><br>

        <nav aria-label="pagination">
            <!-- baris 1 -->
            <div class="row">
                <div class="col"> <!-- search -->
                    <form action="" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control" id="keyword" placeholder="Search your data here.." name="keyword" autocomplete="off" autofocus>
                            <input type="submit" value = "search" class="btn btn-primary btn-success">
                        </div>
                    </form>
                </div>
                <div class="col-4"> <!-- rentang tanggal -->
                    <form action="" method="get">
                        <div class="row input-group">
                            <input type="date" class="form-control" name="tglawal">
                            <input type="date" class="form-control" name="tglakhir">
                            <input type="submit" value = "Date" class="col-3 btn btn-primary btn-success">
                        </div>
                    </form> 
                </div>
            </div> 

            <!-- baris 2 -->
            <div class="row">
                <div class="col-2"> <!-- search id -->
                    <form action="" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control" id="search" placeholder="Search Id" name="search" autocomplete="off" autofocus>
                            <input type="submit" value ="Search" class="btn btn-primary btn-success">
                        </div>
                    </form>
                </div>
                <div class="col dropdown"> <!-- filter level -->
                    <button type="button" class="btn dropdown-toggle btn-success" data-bs-toggle="dropdown">Level</button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?keyword=Crash1">Crash 1</a></li>
                        <li><a class="dropdown-item" href="?keyword=Crash2">Crash 2</a></li>
                        <li><a class="dropdown-item" href="?keyword=SuperCrash1">Super Crash 1</a></li>
                        <li><a class="dropdown-item" href="?keyword=SuperCrash2">Super Crash 2</a></li>
                        <li><a class="dropdown-item" href="?keyword=Recover1">Recover 1</a></li>
                        <li><a class="dropdown-item" href="?keyword=Recover2">Recover 2</a></li>
                        <li><a class="dropdown-item" href="?keyword=Wajar1">Wajar 1</a></li>
                        <li><a class="dropdown-item" href="?keyword=Wajar2">Wajar 2</a></li>
                        <li><a class="dropdown-item" href="?keyword=sama">Sama</a></li>
                    </ul>
                </div> 
                <div class="col dropdown"> <!-- filter jenis -->
                    <button type="button" class="btn dropdown-toggle btn-success" data-bs-toggle="dropdown">
                        Type
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?keyword=Moon">Moon</a></li>
                        <li><a class="dropdown-item" href="?keyword=Crash">Crash</a></li>
                    </ul>
                </div> 
                <div class="col-4"> <!-- rentang sinyal -->
                    <form action="" method="get">
                        <div class="row input-group">
                            <input type="text" class="form-control" name="signal1" placeholder="Signal 1" autocomplete="off">
                            <input type="text" class="form-control" name="signal2" placeholder="Signal 2" autocomplete="off">
                            <input type="submit" value = "Signal" class="btn btn-primary btn-success col-3">
                        </div>
                    </form> 
                </div>
                <div class="col-4"> <!-- rentang harga IDR -->
                    <form action="" method="get">
                        <div class="row input-group">
                            <input type="text" class="form-control" name="hrg1" placeholder="Price IDR" autocomplete="off">
                            <input type="text" class="form-control" name="hrg2" placeholder="Price IDR" autocomplete="off">
                            <input type="submit" value = "IDR Price" class="btn btn-primary btn-success col-3">
                        </div>
                    </form> 
                </div>
            </div>          
        </nav><br>

        <table width='80%' border=1 align=center class="table">
            <thead class="table-dark">
                <tr style="text-align:center;">
                    <th>ID</th>
                    <th>Sinyal</th> 
                    <th>Level</th> 
                    <th>Tanggal dan Waktu</th>
                    <th>Harga Rp.</th>
                    <th>Harga USDT</th> 
                    <th>Vol BTC</th> 
                    <th>Vol Rp.</th>
                    <th>Last Buy</th>
                    <th>Last Sell</th>
                    <th>Jenis</th>
                </tr>
            </thead>
            <tbody>
                <?php   
                    while($user_data = mysqli_fetch_assoc($result)) {  
                        $konter=$user_data['sinyal'];      

                        echo "<tr>";

                        $hrgidr=number_format($user_data['hargaidr']);
                        $hrgusdt=number_format($user_data['hargausdt']);
                        $vidr=number_format($user_data['volidr'],8,",",".");
                        $vusdt=number_format($user_data['volusdt']);
                        $lbuy=number_format($user_data['lastbuy']);
                        $lsell=number_format($user_data['lastsell']);

                        if($konter>=120){ //FF0000
                            echo "<td align=center>".$user_data['id']."</td>";
                            echo "<td align=center>".$user_data['sinyal']."</td>";
                            echo "<td align=center>".$user_data['level_']."</td>";
                            echo "<td align=center>".$user_data['tanggal']."</td>";
                            echo "<td align=center>".$hrgidr."</td>";
                            echo "<td align=center>".$hrgusdt."</td>";
                            echo "<td align=center>".$vidr."</td>";
                            echo "<td align=center>".$vusdt."</td>";
                            echo "<td align=center>".$lbuy."</td>";
                            echo "<td align=center>".$lsell."</td>";
                            
                            if ($user_data['jenis']=='crash'){
                                echo "<td align=center class=table-danger>".$user_data['jenis']."</td>";
                            } elseif ($user_data['jenis']=='moon'){
                                echo "<td align=center class=table-success>".$user_data['jenis']."</td>";
                            }
                        }  

                        elseif($konter>=111){ //FF4500
                            echo "<td align=center>".$user_data['id']."</td>";
                            echo "<td align=center>".$user_data['sinyal']."</td>";
                            echo "<td align=center>".$user_data['level_']."</td>";
                            echo "<td align=center>".$user_data['tanggal']."</td>";
                            echo "<td align=center>".$hrgidr."</td>";
                            echo "<td align=center>".$hrgusdt."</td>";
                            echo "<td align=center>".$vidr."</td>";
                            echo "<td align=center>".$vusdt."</td>";
                            echo "<td align=center>".$lbuy."</td>";
                            echo "<td align=center>".$lsell."</td>";    

                            if ($user_data['jenis']=='crash'){
                                echo "<td align=center class=table-danger>".$user_data['jenis']."</td>";
                            } elseif ($user_data['jenis']=='moon'){
                                echo "<td align=center class=table-success>".$user_data['jenis']."</td>";
                            }
                        }  

                        elseif($konter>=101){ //FFA500
                            echo "<td align=center>".$user_data['id']."</td>";
                            echo "<td align=center>".$user_data['sinyal']."</td>";
                            echo "<td align=center>".$user_data['level_']."</td>";
                            echo "<td align=center>".$user_data['tanggal']."</td>";
                            echo "<td align=center>".$hrgidr."</td>";
                            echo "<td align=center>".$hrgusdt."</td>";
                            echo "<td align=center>".$vidr."</td>";
                            echo "<td align=center>".$vusdt."</td>";
                            echo "<td align=center>".$lbuy."</td>";
                            echo "<td align=center>".$lsell."</td>";    
                            
                            if ($user_data['jenis']=='crash'){
                                echo "<td align=center class=table-danger>".$user_data['jenis']."</td>";
                            } elseif ($user_data['jenis']=='moon'){
                                echo "<td align=center class=table-success>".$user_data['jenis']."</td>";
                            }
                        }

                        elseif($konter>=91){ //E52A2A
                            echo "<td align=center>".$user_data['id']."</td>";
                            echo "<td align=center>".$user_data['sinyal']."</td>";
                            echo "<td align=center>".$user_data['level_']."</td>";
                            echo "<td align=center>".$user_data['tanggal']."</td>";
                            echo "<td align=center>".$hrgidr."</td>";
                            echo "<td align=center>".$hrgusdt."</td>";
                            echo "<td align=center>".$vidr."</td>";
                            echo "<td align=center>".$vusdt."</td>";
                            echo "<td align=center>".$lbuy."</td>";
                            echo "<td align=center>".$lsell."</td>";    
                       
                            if ($user_data['jenis']=='crash'){
                                echo "<td align=center class=table-danger>".$user_data['jenis']."</td>";
                            } elseif ($user_data['jenis']=='moon'){
                                echo "<td align=center class=table-success>".$user_data['jenis']."</td>";
                            }
                        }  

                        elseif($konter>=81){ //F20082
                            echo "<td align=center>".$user_data['id']."</td>";
                            echo "<td align=center>".$user_data['sinyal']."</td>";
                            echo "<td align=center>".$user_data['level_']."</td>";
                            echo "<td align=center>".$user_data['tanggal']."</td>";
                            echo "<td align=center>".$hrgidr."</td>";
                            echo "<td align=center>".$hrgusdt."</td>";
                            echo "<td align=center>".$vidr."</td>";
                            echo "<td align=center>".$vusdt."</td>";
                            echo "<td align=center>".$lbuy."</td>";
                            echo "<td align=center>".$lsell."</td>";    
                            
                            if ($user_data['jenis']=='crash'){
                                echo "<td align=center class=table-danger>".$user_data['jenis']."</td>";
                            } elseif ($user_data['jenis']=='moon'){
                                echo "<td align=center class=table-success>".$user_data['jenis']."</td>";
                            }
                        }  

                        elseif($konter>=71){ //DC5C5C
                            echo "<td align=center>".$user_data['id']."</td>";
                            echo "<td align=center>".$user_data['sinyal']."</td>";
                            echo "<td align=center>".$user_data['level_']."</td>";
                            echo "<td align=center>".$user_data['tanggal']."</td>";
                            echo "<td align=center>".$hrgidr."</td>";
                            echo "<td align=center>".$hrgusdt."</td>";
                            echo "<td align=center>".$vidr."</td>";
                            echo "<td align=center>".$vusdt."</td>";
                            echo "<td align=center>".$lbuy."</td>";
                            echo "<td align=center>".$lsell."</td>";    
                           
                            if ($user_data['jenis']=='crash'){
                                echo "<td align=center class=table-danger>".$user_data['jenis']."</td>";
                            } elseif ($user_data['jenis']=='moon'){
                                echo "<td align=center class=table-success>".$user_data['jenis']."</td>";
                            }
                        }  

                        elseif($konter>=61){ //FF69B4
                            echo "<td align=center>".$user_data['id']."</td>";
                            echo "<td align=center>".$user_data['sinyal']."</td>";
                            echo "<td align=center>".$user_data['level_']."</td>";
                            echo "<td align=center>".$user_data['tanggal']."</td>";
                            echo "<td align=center>".$hrgidr."</td>";
                            echo "<td align=center>".$hrgusdt."</td>";
                            echo "<td align=center>".$vidr."</td>";
                            echo "<td align=center>".$vusdt."</td>";
                            echo "<td align=center>".$lbuy."</td>";
                            echo "<td align=center>".$lsell."</td>";    
                            
                            if ($user_data['jenis']=='crash'){
                                echo "<td align=center class=table-danger>".$user_data['jenis']."</td>";
                            } elseif ($user_data['jenis']=='moon'){
                                echo "<td align=center class=table-success>".$user_data['jenis']."</td>";
                            }
                        }

                        elseif($konter>=51){ //F08080
                            echo "<td align=center>".$user_data['id']."</td>";
                            echo "<td align=center>".$user_data['sinyal']."</td>";
                            echo "<td align=center>".$user_data['level_']."</td>";
                            echo "<td align=center>".$user_data['tanggal']."</td>";
                            echo "<td align=center>".$hrgidr."</td>";
                            echo "<td align=center>".$hrgusdt."</td>";
                            echo "<td align=center>".$vidr."</td>";
                            echo "<td align=center>".$vusdt."</td>";
                            echo "<td align=center>".$lbuy."</td>";
                            echo "<td align=center>".$lsell."</td>";    
                            
                            if ($user_data['jenis']=='crash'){
                                echo "<td align=center class=table-danger>".$user_data['jenis']."</td>";
                            } elseif ($user_data['jenis']=='moon'){
                                echo "<td align=center class=table-success>".$user_data['jenis']."</td>";
                            }
                        }  

                        elseif($konter>=41){ //FFA07A
                            echo "<td align=center>".$user_data['id']."</td>";
                            echo "<td align=center>".$user_data['sinyal']."</td>";
                            echo "<td align=center>".$user_data['level_']."</td>";
                            echo "<td align=center>".$user_data['tanggal']."</td>";
                            echo "<td align=center>".$hrgidr."</td>";
                            echo "<td align=center>".$hrgusdt."</td>";
                            echo "<td align=center>".$vidr."</td>";
                            echo "<td align=center>".$vusdt."</td>";
                            echo "<td align=center>".$lbuy."</td>";
                            echo "<td align=center>".$lsell."</td>";    

                            if ($user_data['jenis']=='crash'){
                                echo "<td align=center class=table-danger>".$user_data['jenis']."</td>";
                            } elseif ($user_data['jenis']=='moon'){
                                echo "<td align=center class=table-success>".$user_data['jenis']."</td>";
                            }
                        }  

                        elseif($konter>=31){
                            echo "<td align=center>".$user_data['id']."</td>";
                            echo "<td align=center>".$user_data['sinyal']."</td>";
                            echo "<td align=center>".$user_data['level_']."</td>";
                            echo "<td align=center>".$user_data['tanggal']."</td>";
                            echo "<td align=center>".$hrgidr."</td>";
                            echo "<td align=center>".$hrgusdt."</td>";
                            echo "<td align=center>".$vidr."</td>";
                            echo "<td align=center>".$vusdt."</td>";
                            echo "<td align=center>".$lbuy."</td>";
                            echo "<td align=center>".$lsell."</td>"; 

                            if ($user_data['jenis']=='crash'){
                                echo "<td align=center class=table-danger>".$user_data['jenis']."</td>";
                            } elseif ($user_data['jenis']=='moon'){
                                echo "<td align=center class=table-success>".$user_data['jenis']."</td>";
                            }
                        }  

                        elseif($konter>=21){ //BA55D3
                            echo "<td align=center>".$user_data['id']."</td>";
                            echo "<td align=center>".$user_data['sinyal']."</td>";
                            echo "<td align=center>".$user_data['level_']."</td>";
                            echo "<td align=center>".$user_data['tanggal']."</td>";
                            echo "<td align=center>".$hrgidr."</td>";
                            echo "<td align=center>".$hrgusdt."</td>";
                            echo "<td align=center>".$vidr."</td>";
                            echo "<td align=center>".$vusdt."</td>";
                            echo "<td align=center>".$lbuy."</td>";
                            echo "<td align=center>".$lsell."</td>";    
                            
                            if ($user_data['jenis']=='crash'){
                                echo "<td align=center class=table-danger>".$user_data['jenis']."</td>";
                            } elseif ($user_data['jenis']=='moon'){
                                echo "<td align=center class=table-success>".$user_data['jenis']."</td>";
                            }
                        }

                        elseif($konter>=11){ //66CDAA
                            echo "<td align=center>".$user_data['id']."</td>";
                            echo "<td align=center>".$user_data['sinyal']."</td>";
                            echo "<td align=center>".$user_data['level_']."</td>";
                            echo "<td align=center>".$user_data['tanggal']."</td>";
                            echo "<td align=center>".$hrgidr."</td>";
                            echo "<td align=center>".$hrgusdt."</td>";
                            echo "<td align=center>".$vidr."</td>";
                            echo "<td align=center>".$vusdt."</td>";
                            echo "<td align=center>".$lbuy."</td>";
                            echo "<td align=center>".$lsell."</td>";    

                            if ($user_data['jenis']=='crash'){
                                echo "<td align=center class=table-danger>".$user_data['jenis']."</td>";
                            } elseif ($user_data['jenis']=='moon'){
                                echo "<td align=center class=table-success>".$user_data['jenis']."</td>";
                            }
                        }  

                        elseif($konter>=1){ //32CD32
                            echo "<td align=center>".$user_data['id']."</td>";
                            echo "<td align=center>".$user_data['sinyal']."</td>";
                            echo "<td align=center>".$user_data['level_']."</td>";
                            echo "<td align=center>".$user_data['tanggal']."</td>";
                            echo "<td align=center>".$hrgidr."</td>";
                            echo "<td align=center>".$hrgusdt."</td>";
                            echo "<td align=center>".$vidr."</td>";
                            echo "<td align=center>".$vusdt."</td>";
                            echo "<td align=center>".$lbuy."</td>";
                            echo "<td align=center>".$lsell."</td>";   

                            if ($user_data['jenis']=='crash'){
                                echo "<td align=center class=table-danger>".$user_data['jenis']."</td>";
                            } elseif ($user_data['jenis']=='moon'){
                                echo "<td align=center class=table-success>".$user_data['jenis']."</td>";
                            }
                        }  

                        else{ //00FF00
                            echo "<td align=center>".$user_data['id']."</td>";
                            echo "<td align=center>".$user_data['sinyal']."</td>";
                            echo "<td align=center>".$user_data['level_']."</td>";
                            echo "<td align=center>".$user_data['tanggal']."</td>";
                            echo "<td align=center>".$hrgidr."</td>";
                            echo "<td align=center>".$hrgusdt."</td>";
                            echo "<td align=center>".$vidr."</td>";
                            echo "<td align=center>".$vusdt."</td>";
                            echo "<td align=center>".$lbuy."</td>";
                            echo "<td align=center>".$lsell."</td>";

                            if ($user_data['jenis']=='crash'){
                                echo "<td align=center class=table-danger>".$user_data['jenis']."</td>";
                            } elseif ($user_data['jenis']=='moon'){
                                echo "<td align=center class=table-success>".$user_data['jenis']."</td>";
                            }
                        }  

                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>

        <div class="row"> <!-- Pagination -->
            <div class="col-16">
                <ul class="pagination justify-content-center">
                    <?php if($hlmnaktif > 1) : ?>
                        <li class="page-item">
                            <a href="?halaman=1" class="page-link" aria-label="previous">
                            <span aria-hidden="True">&laquo;</span></a>
                        </li>
                        <li class="page-item">
                            <a href="?halaman= <?= $hlmnaktif-1; ?>" class="page-link" aria-label="previous">
                            <span aria-hidden="True">&lt;</span></a>
                        </li>
                    <?php endif; ?>

                    <?php for($i = $startNum; $i <= $endNum; $i++) : ?>
                        <?php if($i == $hlmnaktif) : ?>
                            <li class="page-item active" >
                                <a href="?halaman=<?= $i; ?>" class="page-link"><?= $i ?></a>
                            </li>
                        <?php else : ?>
                            <li class="page-item">
                                <a href="?halaman=<?= $i; ?>" class="page-link"><?= $i ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endfor; ?>

                    <?php if($hlmnaktif < $jmlhhlmn) : ?>
                        <li class="page-item">
                            <a href="?halaman= <?= $hlmnaktif+1; ?>" class="page-link" aria-label="next">
                            <span aria-hidden="True">&gt;</span></a></li>
                        </li>
                        <li class="page-item">
                            <a href="?halaman= <?= $jmlhhlmn; ?>" class="page-link" aria-label="next">
                            <span aria-hidden="True">&raquo;</span></a></li>
                        </li>
                    <?php endif; ?> 
                </ul>
            </div>
        </div>  
    </div>
    <br><br>  
</body>
</html>



