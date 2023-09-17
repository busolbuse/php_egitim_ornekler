<?php
namespace projelerbuse; // satır 105 ile alakalı.
//kesinlikle üstünde hiçbir kod yazılı olmamalı aksi takdirde hata .
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
$saat = 20;
if($saat >= 0  and $saat<=6){// kötü bit yazım.
    echo "iyi geceler";
}
if(($saat >= 0) and ($saat<=6)){// paranteze almak daha iyi
    echo "iyi geceler";
}elseif(($saat > 6 ) and ($saat<= 9 )){
    echo "günaydın";
}

//------------------------------------------------------

$saat2 = 20;
if(($saat >= 0) and ($saat<=6)){// paranteze almak daha iyi
    echo "iyi geceler";
}elseif(($saat > 6 ) and ($saat<= 9 )){
    echo "günaydın";
}elseif(($saat > 17) and ($saat<=23)){
    echo "iyi akşamlar";
}

//------------------------------------------------------
$ayadi = "agustos";
switch($ayadi){
    case $ayadi == "ocak";
    echo $ayadi . "ayı 1.aydir";
    break;
    case $ayadi == "şubatk";
    echo $ayadi . "ayı 2.aydir";
    break;
    case $ayadi == "mart";
    echo $ayadi . "ayı 3.aydir";
    break;
    case $ayadi == "nisan";
    echo $ayadi . "ayı 4.aydir";
    break;
    case $ayadi == "mayıs";
    echo $ayadi . "ayı 5.aydir";
    break;
    case $ayadi == "haziran";
    echo $ayadi . "ayı 6.aydir";
    break;
    case $ayadi == "temmuz";
    echo $ayadi . "ayı 7.aydir";
    break;
    case $ayadi == "agustos";
    echo $ayadi . "ayı 8.aydir";
    break;
    case $ayadi == "eylul";
    echo $ayadi . "ayı 9.aydir";
    break;
    case $ayadi == "ekim";
    echo $ayadi . "ayı 10.aydir";
    break;
    case $ayadi == "kasım";
    echo $ayadi . "ayı 11.aydir";
    break;
    case $ayadi == "aralık";
    echo $ayadi . "ayı 12.aydir";
    break;

}



    //------------------------------------------------------

 switch($deger){
    case $deger == 8:
        echo "tik/ case çalıştı";
    break;
    default;
        echo "tik/ cdefault çalıştı";
    }

//------------------------------------------------------

$deger = 2;
$mesaj = "merhaba buse nasılsın";
$mesaj2 = "merhaba berren nasılsın";

echo ($deger == 1) ? $mesaj : $mesaj2;

// değere atayarak da echo diyebilirdik değişmez.





 ?>   
</body>
</html>