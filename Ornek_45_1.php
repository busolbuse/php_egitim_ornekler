
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

$Gelenadi = $_POST["Adi"];
$GelenSoyadi = $_POST["Soyadi"];

$yasamsuresi = time() +  ((60 * 60) *24 );

setcookie("denemecookieaAdi", $Gelenadi , $yasamsuresi);
setcookie("denemecookieSoyadi", $GelenSoyadi , $yasamsuresi);



?>


<a href="Ornek_45_2.php">Mesajı Göster</a>


</body>
</html>