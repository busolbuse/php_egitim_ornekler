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
//                               FONKSİYONLAR

function(){ // bu bir anonim tanımlamadır. eğer isimle çağırmak istiyorsak kesinlikle öncesinde tanımlanmış olmalıdır.

};

function islem(){
    $isimsoyisim = "buse ünal";

    return $isimsoyisim;//içindekinlerini farklı yerlerde kullanabilmem için return yapmamız gerekir.
}

echo islem();
//---------------------------------------------------------------------
// Birden fazla değeri aynanda return ile nasıl döndürürüz
function deneme(){
    $isimmm = "buse";
    $soyisimm = "ünal";
    $ikinciisim = "berren";

    return array($isimmm, $soyisimm , $ikinciisim );// dizi kullanarak çekeibildik.
}
$sonuccc  = deneme();
echo $sonuccc;// HATA : dizi olduğu için böyle yazdırılamaz.
print_r( $sonuccc);// ArrayArray ( [0] => buse [1] => ünal [2] => berren )


//---------------------------------------------------------------------

function islemyap($isim1,$isim2){
    echo $isim1 . " " . $isim2 . "<br>";//bunları fonk içerisinde tanımlamaya gerek yok sonradam da tanımlanırsa ekrana yazar. alttaki şekilde.
}

islemyap("buse", "berren"); // bu şekilde.
//bu parametreler fonksiyon tanımlanırken arttırılabilir.

function islem2($isim = "bilinmiyor", $soyisim = "bilinmiyor", $yas = "bilinmiyor"){
    $gelenisimdegeri = $isim;
    if($gelenisimdegeri != "bilinmiyor"){
        echo "gelen isim: " . $gelenisimdegeri . "<br>";
    }
    $gelenisimdegeri = $soyisim;
    if($gelenisimdegeri != "bilinmiyor"){
        echo "gelen soyisim: " . $gelenisimdegeri . "<br>";
    }
    $gelenisimdegeri = $yas;
    if($gelenisimdegeri != "bilinmiyor"){
        echo "gelen yas: " . $gelenisimdegeri . "<br>";
    }
    
}

islem2("buse","ÜNAL", "18");


//---------------------------------------------------------------------
//                          SONSUZ DEĞER ALAN FONKSİYON

// func_num_args()  :  fonk gönderilen parametre sayısını bulur.
// func_get_array() :  fonk gönderilen parametre dep-ğerleirni bir dizi oluşturur
// func_get_arg() :  fonk gönderilen parametre dep-ğerleirni bir dizi olarak kabul eder ve belirtilen anahtara ait elemanın degerini döndürür.


function bilgi( ){
 $gelenn = func_num_args();
 //$gelenn2 =  func_get_array();
 echo $gelenn;//3
    print_r($gelenn);
}
bilgi("sdfsd","sdfds","sfs");

//---------------------------------------------------------------------
// bir fonksiyondan diper fonk a göndermek için yine return kısmında diğer fonk çağırılarak 1.fonk daki değerler çağırılan fonk nun arametresi olarak girilir.



//---------------------------------------------------------------------
//                  fonk u bir değişken kullanarak çağırma


$calistir = "deneme";
function denemee($deger1){
    echo $deger1;
}
$calistir("buse berrennnnnnnn");

//---------------------------------------------------------------------
//                          OTOMATİK ÇALIŞAN FONK.

($islemyaap = function(){
    echo "buse". "<br";
})();
$islemyaap();

// buna parametre de tnaımlanabilir.

($islemyaap2 = function($bir,$iki){
    echo $bir . " " . $iki . "<br" ;
})("buse ", "berren ");

//---------------------------------------------------------------------
// RECURSİVE FONK: KENDİ KENDİNİ ÇAĞIRAN FONK.

function islemyap3($sayi){
    if($sayi<= 25){
        echo $sayi ."<br>";
        islemyap3(($sayi));
    }

}
islemyap3(1);





?>

</body>
</html>