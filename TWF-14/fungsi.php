<?php 
//konfigurasi pagination
$jmlhdataperhlmn = 50; 
$alldata = mysqli_query($mysqli, "SELECT * FROM btc"); //menampilkan semua data di tabel btc
$jmlhdata = mysqli_num_rows($alldata); //menampilkan jumlah semua data
$jmlhhlmn = ceil ($jmlhdata/$jmlhdataperhlmn); //memperkirakan jumlah halaman yang terbentuk //ceil membulatkan bilangan ke atas
$hlmnaktif = (isset($_GET["halaman"]))? $_GET["halaman"] : 1; //jika web belum akses halaman, tampilkan halaman pertama.
$awaldata = ($jmlhdataperhlmn * $hlmnaktif) - $jmlhdataperhlmn; //memperkirakan awal data tiap halaman
$jmlhlink = 7; //menentukan panjang sayap pagination

if($hlmnaktif > $jmlhlink){
    $startNum = $hlmnaktif - $jmlhlink;
} else {
    $startNum = 1;
}
if($hlmnaktif < ($jmlhhlmn-$jmlhlink)){
    $endNum = $hlmnaktif + $jmlhlink;
} else {
    $endNum = $jmlhhlmn;
}

//mengambil semua data user dari database
$result = mysqli_query($mysqli, "SELECT*FROM btc ORDER BY id DESC LIMIT $awaldata, $jmlhdataperhlmn"); 
//limit utk membatasi jumlah data yang ditampilkan per halaman

//search id
if(isset($_GET['search'])){
    $search = $_GET['search'];
    $result = mysqli_query($mysqli, "SELECT*FROM btc WHERE 
    id LIKE '$search%' ORDER BY id DESC");
} 

//filter harga
if(isset($_GET['hrg1'])){
    $hrg1 = $_GET['hrg1'];
    $hrg2 = $_GET['hrg2'];
    $result = mysqli_query($mysqli, "SELECT*FROM btc WHERE hargaidr BETWEEN $hrg1 AND $hrg2 ORDER BY id ASC");
} 

//filter sinyal
if(isset($_GET['signal1'])){
    $sgn1 = $_GET['signal1'];
    $sgn2 = $_GET['signal2'];
    $result = mysqli_query($mysqli, "SELECT*FROM btc WHERE sinyal BETWEEN $sgn1 AND $sgn2 ORDER BY id ASC");
} 

//filter tanggal
if(isset($_GET['tglawal'])){
    $tglawal = $_GET['tglawal'];
    $tglakhir = $_GET['tglakhir'];
    $result = mysqli_query($mysqli, "SELECT*FROM btc WHERE tanggal BETWEEN '$tglawal' AND '$tglakhir+1' ORDER BY id ASC");
} 

//search
if(isset($_GET['keyword'])){
    $keyword = $_GET['keyword'];
    $result = mysqli_query($mysqli, "SELECT*FROM btc WHERE 
    id LIKE '$keyword%' OR
    sinyal LIKE '$keyword%' OR
    level_ LIKE '$keyword%' OR
    tanggal LIKE '%$keyword%' OR
    hargaidr LIKE '$keyword%' OR
    hargausdt LIKE '$keyword%' OR
    volidr LIKE '$keyword%' OR
    volusdt LIKE '$keyword%' OR
    lastbuy LIKE '$keyword%' OR
    lastsell LIKE '$keyword%' OR
    jenis LIKE '%$keyword%' ORDER BY id DESC");
} 

?>