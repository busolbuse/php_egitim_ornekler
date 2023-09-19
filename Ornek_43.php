
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
//                               :DOSYA İŞLEMLERİ: 

// basename(): belirtilen değer doğrultusunda kaynağın sadece dosya adını bularak geri döndürür.
// dirname():  belirtilen değer doğrultusunda kaynağın içerisinde bulunduğu dizinlerin adını bularak geri döndürür.
// pathinfo():belirtilen değer doğrultusunda kaynağın içerisinde bulunduğu dizinlerin ve  dosya adını bulur ve yeni bir dizi oluşturarak dizi değerini  geri döndürür.
// realpath(): kaynağın mutlak yolunu bularak geri döndürür.


$dosya = "dosya/dokuman/belge.txt";
$bul = basename($dosya); // ÇIKTI : belge.txt yani en son dizin yani belge adı 
echo $bul . "<br>"; 

$dosya = "dosya/dokuman/belge.txt";
$bul = dirname($dosya); // ÇIKTI : dosya/dokuman belge adı üstü 
echo $bul . "<br>"; 

$dosya = "dosya/dokuman/belge.txt";
$bul = pathinfo($dosya); 
echo $bul . "<br>"; //hata.
print_r($bul); // array döndürecek çünkü 
// ÇIKTI : Array ( [dirname] => dosya/dokuman [basename] => belge.txt [extension] => txt [filename] => belge )


$dosya = "masaüsyü/deneme.txt";
$bul = realpath($dosya); // ÇIKTI : 
echo $bul . "<br>"; 



//----------------------------------------------------------------------------------------------

// 







?>






</body>
</html>