<?php
session_start();
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
        background-color: black;
        color: white;
    }
</style>
</head>
<body>
<?php

//---------------------------------------------------------------------
//                 :  COOKİE(ÇEREZ) ve SESSION (OTURUM) YÖNTEMLERİ:

//                                                 SESSİON   
// session un süresini başka bir php doyası belirler değiştirmeye gerek yok.

// session_star(): başlatabilmek ve takip etmek için kullanılır. oluşturmka için DEĞİL.
// sesion_destroy():  silmek için.

$_SESSION["denemesession"] = "bubirsessioni";
//cookie de bu yazdıklarımızı okuyabiliyorduk ama session okunmaz // görmek içinde  başlatmalıyız.
//şimdi session star demeliyiz ve bu kod u ilk satıra yazılmalıdır.
/* her sayfa için bunu hep yapmak zorunda değiliz
        - ayar dosyası oluşturarak ayar dosaysının en üstüne yazıcağız ve ana dosyamıza çekeceğiz. */

// güvenlikli olduğu için sadece id değeri görünür onu da biz kendi dosyamızda görebililriz. // sunucunun temp dizininde ses_.... dosyası.

//---------------------------------------------------------------------

// sesion da da çoklu oluşturabiliriz.

$_SESSION["lalala"] = "bubirsessioni2"; // ne kadar çok olsa da tarayıcıda 1 tane olarak gözükür.

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
/* ÇIKTI :  
Array
(
    [denemesession] => bubirsessioni
    [lalala] => bubirsessioni2
)
*/

//---------------------------------------------------------------------
// SİL DEDİĞİMİZDE SESİONUN ADI NE OLURSA OLSUN HEPSİ SİLİNİR.
// sesion_destroy():
// tek tek sil ek istersek genel bir tanım var unset() diye
// bunu içine adını yazarak sildirirz
// unset() tek session için değil çoğu şey iççin kullanılır genel bir yöntemdir.


//---------------------------------------------------------------------
//                                      dizi oluşturursak:

// cookie ile aynı şekilde yaparız.
// aynı adla birden fazla tnaımlıycaz:

$_SESSION["Kullanici"] = array("Adi" => "buse", "Soyadi" => "ünal");
$_SESSION["sepet"] = array("ID" => 12 , "sepetTutari " => 1000 );

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
/* ÇIKTI :
Array
(
    [denemesession] => bubirsessioni
    [lalala] => bubirsessioni2
    [Kullanici] => Array
        (
            [Adi] => buse
            [Soyadi] => ünal
        )

    [sepet] => Array
        (
            [ID] => 12
            [sepetTutari ] => 1000
        )

)*/

?>


</body>
</html>