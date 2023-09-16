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

    //__LINE__ :dosyası içinde bulunduğu ssatırın satır numarasının bilgisini ve değerini döndürür. 
    echo __LINE__ . "<br />";// 18.satırda

    $satirnumarasi = __LINE__;
    echo $satirnumarasi . "<br />";//21
    //burada önemli bir fark oluşur
    //normalde lıne bulunduğu yerin nosunu verirken
    //eğer değişkene atarsak tanımlandığı yerin satır numarasını verir.

    //-----------------------------------

    //__DIR__ : Çalışan php dosyasının dizin bilgisi

    echo __DIR__ . "<br />"; // C:\xampp\htdocs\btk_egitim
    //değişkene atıyarak yaparsak bu sefer dosya adı olmadan bize dizini vericektir.

    //-----------------------------------
    //__FILE__: dosya yolu
    echo __FILE__ . "<br />"; // C:\xampp\htdocs\btk_egitim\Ornek_28.php farka dikkat.

    //-----------------------------------
    //__FUNCTION__: ilgili fonk. nun adı

    function deneme(){
        echo __FUNCTION__ . "<br />";
    }
    deneme();// deneme 

    //-----------------------------------

    //__CLASS__ : sınıfların adını verir

    class deger{
        function denenme2(){
            echo __CLASS__ . "<br />";
        }
    }
        $Islem = new deger;
        $Islem->denenme2(); //classlar bu şekilde çağırılır.
        //deger yazar. yani class ın ismi.


   //-----------------------------------
   // __METHOD__ : method adını dondurur.

   class extra{
    //ÖNEMLİİİİİ bunun içinde tanımlanan her fonksiyon bir method dur.ÖNEMLİİİİİİİİİİİİ
        function ooo(){
            echo __METHOD__ . "<br />";
        }
        function bubirbaska(){
            echo __METHOD__ . "<br />";
        }
   }
    $Islem = new extra;
    $Islem->ooo();// çıktı : extra::ooo
    $Islem->bubirbaska(); // çıktı :  extra::bubirbaska

    //-----------------------------------

    // __TRAIT__ : class ın ozellikliğin, özellik adı bilgisini verir.

    //bir nesneye kalıtım yapılması için trait kullanılır.

    trait ozellik1{
        function bir(){
            echo __TRAIT__ . "<br />";
        }
    }
    trait ozellik2{
        function iki(){
            echo __TRAIT__ . "<br />";
        }
    }

    class degerr{
        use ozellik1; //kalıtımın içindeki fonksiyona eriştik.
        use ozellik2;
    }
    $Islem = new degerr;
    $Islem->bir();// çıktı :  ozellik1 // namspace ekledikten sonra çıktı projelerbuse\ozellik1 olur 105 .satır ile ilgili.
    $Islem->iki(); // çıktı : ozellik2 ,// projelerbuse\ozellik2 üsteki nedenden dolayı //  // atamadan yaparsam  hata olur.

    //-----------------------------------
    // __NAMESPACE__ : namespace nin adını 

    class uye{

    }
    namespace projelerharun;
    // aynı klas ismini kullansan bile 
    //namespace i farklı olduğu için kullanabilinir.
    //Bu genelde farklı yazılımcılar birlikte proje yürütürken çakışmalar olmasını engellemek amaçlı kullanılır.
    // FARKLI EVRENLERİN DÜNYASINDA AYNI KİŞİLER :)

    class uye{
        
    }
    echo __NAMESPACE__ . "<br />";
 ?>   
</body>
</html>