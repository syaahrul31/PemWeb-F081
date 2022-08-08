<?php
$botToken = '5227719292:AAGtd-ejLKgLcutq5RVJug-mtaJ1wAiPqI0';
$website = "https://api.telegram.org/bot$botToken";

$content = file_get_contents("php://input");
$update = json_decode($content,TRUE);
$message = $update['message'];


$chatID = $message['chat']['id'];
$text = $message['text'];


$user = 'id18446158_roots';
$database = 'id18446158_btcnew';
$password ='zKV\?=DF\g0G8$7$';
$host = 'localhost';


$mysqli = new mysqli($host,$user,$password,$database);
$pesan = "";



if ($mysqli->connect_errno) {
    $pesan = $mysqli->connect_error;
}else{
    $menu = explode(" ",$text)["0"];
    $param = explode(" ",$text);
    switch($menu){
        case "/start":
            $pesan = "Hi user, Selamat datang di Mesin Penjawab Bot kelompok 6. Selanjutnya tekan /key untuk menampilkan perintah lainnya.\n\n";
            $pesan.="enjoy :)";
            break;
        case "/key":
            $pesan = "Hi user, Anda dapat mengontrol saya dengan mengirimkan perintah berikut :\n\n";
            $pesan.= "/start - memulai bot\n";
            $pesan.= "/key - menampilkan keyword penggunaan bot\n";
            $pesan.= "/recent - menampilkan data btc terkini\n";
            $pesan.= "/last - menampilkan data btc terakhir\n";
            $pesan.= "/chart - menampilkan diagram data berdasarkan level\n";
            break;
        case "/recent":
            $data = $mysqli->query("select * from btc order by id desc limit 1")->fetch_assoc();
            $pesan ="Data BTC Terakhir : \n\n";
            $pesan.= "Id : ".$data['id']."\n";
            $pesan.= "Tanggal : ".$data['tanggal']."\n";
            $pesan.= "Sinyal : ".$data['sinyal']."\n";
            $pesan.= "Level : ".$data['level_']."\n";
            $pesan.= "Harga (BTC/IDR) : Rp.".number_format($data['hargaidr'])."\n";
            $pesan.= "Harga (BTC/USDT) : $ ".number_format($data['hargausdt'])."\n";
            $pesan.= "Volume (IDR) : ".number_format($data['volidr'],8)."\n";
            $pesan.= "Volume (USDT) : ".number_format($data['volusdt'])."\n";
            $pesan.= "Last Buy : ".number_format($data['lastbuy'])."\n";
            $pesan.= "Last Sell : ".number_format($data['lastsell'])."\n";
            $pesan.= "Jenis : ".$data['jenis']."\n";
            break;
        case "/last":
            $pesan ="Harap masukan parameter dengan benar seperti berikut : /last 10";
            if(isset($param[1])){
              if(is_numeric ($param[1])){
                  $pesan ="Data BTC $param[1] Terakhir : \n\n";
                  $result = $mysqli->query("select * from btc order by id desc limit $param[1]")->fetch_all(MYSQLI_ASSOC);
                  foreach($result as $data){
                        $pesan.= "Id : ".$data['id']."\n";
                        $pesan.= "Tanggal : ".$data['tanggal']."\n";
                        $pesan.= "Sinyal : ".$data['sinyal']."\n";
                        $pesan.= "Level : ".$data['level_']."\n";
                        $pesan.= "Harga (BTC/IDR) : Rp.".number_format($data['hargaidr'])."\n";
                        $pesan.= "Harga (BTC/USDT) : $ ".number_format($data['hargausdt'])."\n";
                        $pesan.= "Volume (IDR) : ".number_format($data['volidr'],8)."\n";
                        $pesan.= "Volume (USDT) : ".number_format($data['volusdt'])."\n";
                        $pesan.= "Last Buy : ".number_format($data['lastbuy'])."\n";
                        $pesan.= "Last Sell : ".number_format($data['lastsell'])."\n";
                        $pesan.= "Jenis : ".$data['jenis']."\n\n";
                  }
              }
            }
            break;
         case "/chart":
            $pesan = "Pilih diagram berdasarkan kata kunci level berikut.\n" ;
            $pesan.= "/crash1\n";
            $pesan.= "/crash2\n";
            $pesan.= "/diamondcrash\n";
            $pesan.= "/goldencrash1\n";
            $pesan.= "/goldencrash2\n";
            $pesan.= "/megacrash1\n";
            $pesan.= "/megacrash2\n";
            $pesan.= "/moon1\n";
            $pesan.= "/moon2\n";
            $pesan.= "/megamoon1\n";
            $pesan.= "/megamoon2\n";
            $pesan.= "/recover1\n";
            $pesan.= "/recover2\n";
            $pesan.= "/sama\n";
            $pesan.= "/supercrash1\n";
            $pesan.= "/supercrash2\n";
            $pesan.= "/supermoon1\n";
            $pesan.= "/supermoon2\n";
            $pesan.= "/ultracrash1\n";
            $pesan.= "/ultracrash2\n";
            $pesan.= "/ultramoon1\n";
            $pesan.= "/ultramoon2\n";
            $pesan.= "/wajar1\n";
            $pesan.= "/wajar2\n";
            break;
        case "/crash1":
            $pesan = "Grafik level 'Crash1'\n";
            $pesan.= "https://i.imgur.com/EnJL3MI.png" ;
            break;
        case "/crash2":
            $pesan = "Grafik level 'Crash2'\n";
            $pesan.= "https://imgur.com/6TIZ3tn.png" ;
            break;
        case "/diamondcrash":
            $pesan = "Grafik level 'DiamondCrash'\n";
            $pesan.= "https://imgur.com/g0CHvEK.png" ;
            break;
        case "/goldencrash1":
            $pesan = "Grafik level 'GoldenCrash1'\n";
            $pesan.= "https://imgur.com/GqxPSwa.png" ;
            break;
        case "/goldencrash2":
            $pesan = "Grafik level 'GoldenCrash2'\n";
            $pesan.= "https://imgur.com/RoN5fzs.png" ;
            break;
        case "/megacrash1":
            $pesan = "Grafik level 'MegaCrash1'\n";
            $pesan.= "https://imgur.com/aKDatTO.png" ;
            break;
        case "/megacrash2":
            $pesan = "Grafik level 'MegaCrash2'\n";
            $pesan.= "https://imgur.com/kTfiFIH.png" ;
            break;
        case "/moon1":
            $pesan = "Grafik level 'Moon1'\n";
            $pesan.= "https://imgur.com/PI8WvIw.png" ;
            break;
        case "/moon2":
            $pesan = "Grafik level 'Moon2'\n";
            $pesan.= "https://imgur.com/CcL1WX2.png " ;
            break;
        case "/megamoon1":
            $pesan = "Grafik level 'MegaMoon1'\n";
            $pesan.= "https://imgur.com/NM0n5IB.png" ;
            break;
        case "/megamoon2":
            $pesan = "Grafik level 'MegaMoon2'\n";
            $pesan.= "https://imgur.com/fh7089u.png" ;
            break;
        case "/recover1":
            $pesan = "Grafik level 'Recover1'\n";
            $pesan.= "https://imgur.com/JeSGQ9b.png" ;
            break;
        case "/recover2":
            $pesan = "Grafik level 'Recover2'\n";
            $pesan.= "https://imgur.com/Z3H1QJw.png" ;
            break;
        case "/sama":
            $pesan = "Grafik level 'Sama'\n";
            $pesan.= "https://imgur.com/7G6hEHD.png" ;
            break;
        case "/supercrash1":
            $pesan = "Grafik level 'SuperCrash1'\n";
            $pesan.= "https://imgur.com/hIOuf7O.png" ;
            break;
        case "/supercrash2":
            $pesan = "Grafik level 'SuperCrash2'\n";
            $pesan.= "https://imgur.com/rsyJq3D.png" ;
            break;
        case "/supermoon1":
            $pesan = "Grafik level 'SuperMoon1'\n";
            $pesan.= "https://imgur.com/z1mntlr.png" ;
            break;
        case "/supermoon2":
            $pesan = "Grafik level 'SuperMoon2'\n";
            $pesan.= "https://imgur.com/PjskHBX.png" ;
            break;
        case "/ultracrash1":
            $pesan = "Grafik level 'UltraCrash1'\n";
            $pesan.= "https://imgur.com/6Vwbwnm.png" ;
            break;
        case "/ultracrash2":
            $pesan = "Grafik level 'UltraCrash2'\n";
            $pesan.= "https://imgur.com/eOYNbdG.png" ;
            break;
        case "/ultramoon1":
            $pesan = "Grafik level 'UltraMoon1'\n";
            $pesan.= "https://imgur.com/he3YstJ.png" ;
            break;
        case "/ultramoon2":
            $pesan = "Grafik level 'UltraMoon2'\n";
            $pesan.= "https://imgur.com/WbHnmEY.png" ;
            break;
        case "/wajar1":
            $pesan = "Grafik level 'Wajar1'\n";
            $pesan.= "https://imgur.com/BGnhPzK.png" ;
            break;
        case "/wajar2":
            $pesan = "Grafik level 'Wajar2'\n";
            $pesan.= "https://imgur.com/jUgu0NE.png" ;
            break;
        default:
            $pesan ="Keyword not found";
    }
    
}

$pesan = urlencode($pesan);

file_get_contents($website."/sendmessage?chat_id=".$chatID."&parse_mode=MarkDown&text=".$pesan);


?>