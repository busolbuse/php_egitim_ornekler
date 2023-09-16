<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="todo_list.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>OrnekLERR</title>
    <style>
    body{
        background-color: black;
        color: white;
    }
</style>
</head>
<body>
<?php

    //sbt den geleni sbt e çektik 

    define ("ICERIK", "ABOOOO");
    const VERI = ICERIK;
    echo VERI . "<br />";

    //araya degisgen de eklesek

    $Islem = "degisgennnn";
    define ("LALA", $Islem);
    const VERII = LALA;
    echo VERII . "<br />";

    //FAKAT BUNA DİKKAT
    $Islem = "degisgennnn33";

    // const ICERIKK = "const-sbti";//buraya değişken atamayız
    
    //ama bunu yapabiliriz
    //başta yien define ile alırız.
    define ("ICERIKK", $Islem);
    const VERI3 = ICERIKK;
    echo VERI3 . "<br />";

    //-----------------------------------

    //birden fazla sbt i birleştirme:
    define ("AD", "BUSE");
    define ("SOYAD", " BERREN");

    define("SONUC", AD ." ".  SOYAD);
    echo SONUC . "<br />";

    //const a yapalım.

    const AD2 = "buse";
    const AD3 = "BERRENn";

    const SONUC2 = AD2 . " " . AD3;
    echo SONUC2;

    //birbirlerine yapalım 
    define ("LALALALA", "BUSEEE");
    const UUUU = "buseeeee";

    define("SONUNDA", LALALALA . " " . UUUU);
    echo SONUNDA . "<br />";
    //CONST İLE DE BİRLEŞTİRİLEBİLİR HERHANGİ BİR SORUN YOK.

    //-----------------------------------

    //Dizilerin kuralları sbtlerde de geçerlidir.

    echo SONUNDA[0];//B








 ?>   
</body>
</html>