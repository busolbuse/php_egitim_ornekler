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
    //                          :ARRAY:
    // arraylerde print_r() kullanılır.
    // dizilerde : array() fonk ile yada [] ile tanımlanır.
    // array(anahtar => eleman, anahtar => eleman,...) ya da   array(eleman, eleman, ...)
    $Isimler = array("buse", "berrem");
    print_r($Isimler);// echo ile dizinin tamamı alınmaz.
    // eğer anahtar tanımlanmazsa kendisi atar. 
    //biz şuanda yazadık.  çıktı :   Array ( [0] => buse [1] => berrem )

    //---------------------------------------------------------

    //çıktının daha rahat okunması için 
    echo "<pre>";
    print_r($Isimler);   /* çıktı:
                            Array
                        (
                            [0] => buse
                            [1] => berrem
                        )
                            */
    echo "</pre>";

    //---------------------------------------------------------

    echo $Isimler[0]; // buse

    //---------------------------------------------------------

    // anahtar tanımlayalım.
    $deneme = array("anahtarr1"=> "abo1", "anahtar2" => "abo2");
    echo $deneme[1];//hata alırız çünkü çağıracağımız artık 1 değil anahtar2 yazılmalı .
    echo $deneme["anahtar2"];// abo2
    //peki karışık yaparsak
    $iki = array("lala" => "bbusee", "nane", "dal","karpuz");

    echo "<pre>";
    print_r($iki); /* çıktı :
    Array
    (
        [lala] => bbusee
        [0] => nane --> kaldığı yeden 0 olarak başlatır.
        [1] => dal
        [2] => karpuz
    )
    */
    echo "</pre>";
    $uc =  ["dizi1", "dizi2"];
    print_r($uc);//Array ( [0] => dizi1 [1] => dizi2 )
    //her özellik aynıdır ama array() şeklinde tanımlanması daha doğruudr.

    //---------------------------------------------------------

    //                    :SBT ARRAY:
    
    define("SABIT", array("abo1","denemee","lala"));
    print_r((SABIT));// Array ( [0] => dizi1 [1] => dizi2 ) Array ( [0] => abo1 [1] => denemee [2] => lala )

    const DEGER = array("lalalalalal", "busewe");
    print_r((DEGER));// Array ( [0] => lalalalalal [1] => busewe )
    //yine aynı şekilde anahtar olayları var.

    //------------------------------------------------------
    //               :DEĞİŞKENLER İLE ARRAY
    $isim = "buse";
    $isim2[] = "bu bi array oldu";
    echo $isim  . "<br />";
    print_r($isim2);// Array ( [0] => bu bi array oldu )
    //anahtar oluşturucak olursak
    $isim3["bu bir anahtarr"] = "bu bi array oldu";
    echo $isim3["bu bir anahtarr"]  . "<br />";//  çıktı : bu bi array oldu

    //------------------------------------------------------
    //      dizi içinde değişkne ve sbt
    $degisgen = "buse";
    $ala = "berren";
    define("ESYA", "masa");
    define("ARAC","araba");
    const RENK = "mavi";
    const LALA = "LALA";

    $degerler = array($degisgen,$ala, ESYA, ARAC, RENK,LALA,"ben");

    echo "<pre>";
    print_r($degerler);
    echo "</pre>" . "<br />";
    /* 
çıktı: Array
(
    [0] => buse
    [1] => berren
    [2] => masa
    [3] => araba
    [4] => mavi
    [5] => LALA
    [6] => ben
)
    */
 ?>   
</body>
</html>