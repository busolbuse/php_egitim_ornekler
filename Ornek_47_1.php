<?php
require_once("Ornek_47_3_ayar_dosyasi.php");// böylece çektik.
?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="todo_list.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>OrnekLERR</title>
    <style>
    body{
        background-color: goldenrod;
        color: white;
    }
</style>
</head>
<body>
<?php

//---------------------------------------------------------------------
//                 :  COOKİE(ÇEREZ) ve SESSION (OTURUM) YÖNTEMLERİ:
//                                          POST

$Gelenkullaniciadi = $_POST["Adi"];
$Gelenkullanicisifresi = $_POST["Kullanicininsifresi"];

//boş değilse bir sesion oluştursun.
if(($Gelenkullaniciadi != "") and ($Gelenkullanicisifresi !="")){
    $_SESSION["adi"] = $Gelenkullaniciadi;
    $_SESSION["sifresi"] = $Gelenkullanicisifresi;

    echo "merhaba" . $Gelenkullaniciadi ." " . "siteye giriş yaptın!! <br />";
    echo "<a href='Ornek_47_2.php'>Çıkış YAPPPPr</a>";//çift tıkrnak içinde olduğu için dosya belirtirken tek tırnak yaptık.
    }else { 
        echo "ALANI DOLDUR LAN!";
        echo "<a href='Ornek_47.php'>FORMA DON VE AKLINI DENK AL !!!!</a>";
}



?>





</body>
</html>