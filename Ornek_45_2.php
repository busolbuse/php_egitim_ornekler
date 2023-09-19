
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

//                      :kim olduğunu yazdırdığımız sayfa:

$isim = $_COOKIE["denemecookieaAdi"];
$soyisim = $_COOKIE["denemecookieSoyadi"];
echo "merhaba " . $isim . " " . $soyisim . " " . "nasılsın ? <br>  <br>  <br>";

 
?>



<a href="Ornek_45.php">Forma geri dön!</a>



</body>
</html>