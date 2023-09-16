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
   //$isim = "buseberren"; bu bi değişken
//aşağıdaki ise bir sbt

    define("isim", "buseberren"); // 1 inci sbt in ismi 2. de içeriği belirtiriz
    echo isim . "<br  />";
    
    const isimm =  "buseberrennnnnnnnunal"; // bu da bir sabittir.
    echo isimm . "<br  />";
    //sbtler büüyk harfle yazılması önerilir.

    //-----------------------------------

    /*  
    define("ISIM", "buseberren"); // 1 inci sbt in ismi 2. de içeriği belirtiriz
    echo ISIM . "<br  />";
    
    const ISIMM =  "buseberrennnnnnnnunal"; // bu da bir sabittir.
    echo ISIMM . "<br  />";
    */
    const _altlabaslar = "altlabaslar_____";
    echo  _altlabaslar . "<br  />";

    //ama sbtler hiçbir zaman rakam ile başlamaz HATAAAAAAAAAAA
    //bası dışında bir yerde kullanılabilir rakam.
    //tr karakter kullanılmaz.

    //-----------------------------------

    //define("DeNEme", "büyükkücük_kalktı", true); TRUE KALKMIŞŞŞŞŞŞŞŞŞŞŞŞŞŞŞŞŞŞŞŞŞŞŞŞŞŞŞŞŞŞŞ
    //echo DENEME;

    //-----------------------------------

    //SBTler birden fazla kes kulanılamaz eğer yazılırsa ilk yazılan hep gerçek değer olarak alınır. 
    //ki buna benzer olarak sbtlere atanacak olan sonradan değiştirilemez.
    //bu değikenlerden farkıdır.

    //-----------------------------------

    //önceki örneklerde yaptımız global ve local olarak tanımlanmamış oluyor hatasını eğer sbt ile yaparsak bu hatadan kaçabilir miyiz?
    function deneme(){
        $ISIM = "buse berren"; //değişken ile
        define("ISIM", "Buse berren");//sbt ile
    }
    deneme();
    echo $ISIM . "<br />";//hata aldık
    echo ISIM . "<br />";// çalıştı ama fonksiyonu çağırmamız gerek.

    //-----------------------------------

    //HATAAAAAAAAAAAAAAAAAAAAAAAA
    /*
    function deneme2(){
        const ISIM = "Buse berren";// const sbt ile yaparsak ne değişir
        //yazdığımız an zaten hata olarak göründü 
        //çünkü const ile sbt local alanda tanımlanacak olursa çalışmaz
    }
    deneme2();
    echo ISIM;// çalıştı ama fonksiyonu çağırmamız gerek.
    */
    // PEKİ TAM TERSİNİ DENERSEK
    //sbt globalde tanımlanacak olup localde kullanılıcak olursa

    //-----------------------------------

    //HATAAAAAAAAAAAAAAAAAAAAAAAA
    /*

    $DEGER = "BUSE"; // NORMAL değişken ile globalde tanımlanacak olup localde kullanılıcak olursa olmaz.
    function deneme(){
       echo $DEGER; //HATA
        
    }
    */
    define("DEGER","bUSe");//sbt oluşturduk ve globalde tanımlanacak olup localde kullanılıcak olmasını istiyoruz.
    function deneme3(){
        echo DEGER . "<br />"; //sbt yazdırdık
    }
    deneme3();//çağırdık.

    //-----------------------------------
    //ÖNEMLİ:
    //const da localden globale geçemez 
    //ama
    // globalden locale geçer

    const DEGER2 = "BUSE";
    function deneme4(){
        echo DEGER2;
    }
    deneme4();

?>

    
   
</body>
</html>