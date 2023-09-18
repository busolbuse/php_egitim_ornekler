
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
//                               :FONKSİYONLAR - VERİLER: 
// gettype(): herhangi bir değişken içeriğinin veri türünü bulur ve geri döndürür.

$deger = "80";
$sonuc = gettype($deger);
echo $sonuc . "<br>";

//---------------------------------------------------------------------

// settype() : değişken içeriğinin veri türünü belirleyip değiştirmek için

$deger = "80";
$sonuc = settype($deger,"integer");
echo $sonuc . "<br>";

//---------------------------------------------------------------------
/* boolval(): değşkenin boolean veri türü değerini geriye döndürür
intval(): değişkenin integer veri türü değerini geriye döndürür
floatval(): değişkenin float veri türü değerini geriye döndürür
doubleval():değişkenin double veri türü değerini geriye döndürür    */

//---------------------------------------------------------------------
//                      :VERİ TÜRÜ DAYATMA İŞLEMLERİ:
/* declare(strict_types=1): kodlama dosyası içindeki tüm kodlamaların kural yapısını belirler kesinlikle kod dosyasının en üstüne yazılmalıdır.
declare(strict_types=1) bu şekilde en üste yazaılır php tagları içerisinde.

*/


//---------------------------------------------------------------------
// var_dump(): herhangi bir değişkene ait tüm yapıya ve bilgilere ulaşmak için kullanılır.
$deger3 =  233.32;
var_dump($deger3); //float(233.32)

$deger4 =  true;
var_dump($deger4);// bool(true)

//NOTE: dizi içerisindeki verilerin de türünü geri döndürür.


//---------------------------------------------------------------------
// serialize(): herhangi bir değeri saklanabilir bir veri türüne dönüştürüp geri döndürür.
//unserialize(): serialize metodu kullanılarak üretilmiş olan herhangi bir saklanabilir veri türündeki...
//... değeri eski original haline dönüştürüp geri döndürür.

$bilgi = array("ana3" => "buse", "ana2" => "berren");
$serilize = serialize($bilgi);// dönüşütrüyoruz.
print_r ($serilize);// array tipli olucağı için print kullandık dikkat.
// üstekinin çıktısı: a:2:{s:4:"ana3";s:4:"buse";s:4:"ana2";s:6:"berren";} budur.
// tersini yaparsak anlaşılabilir hale dönüştürütmek için
$unserilized = unserialize($serilize); //yaparız.
print_r ($unserilized);// çıktı : Array ( [ana3] => buse [ana2] => berren )











?>






</body>
</html>