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
    echo  "global çalışmaları 1 " . "<br />";

    $isim = "buse";
    // bu şekilde çağırdığımızda da olmaz:  $GLOBALS["isim"] = "buse";
    //çünkü globalden locale çekme ypk localden globale çekersin.

    function deneme(){//fonksiyonun içi local alandır.
        // çalışmaz :    echo $isim; 
        echo  $GLOBALS["isim"] . "<br />";
    }
    deneme(); //çalışınca hata vermez.

    echo  "global çalışmaları  2 " . "<br />";
    $deneme = "abo";
    function bir(){
        global $deneme; // böyle çağırabiliriz ama bu onu globale taşıdığımız anlamına gelmez geçiçi gibi düşünebiliriz.
        echo $deneme . "<br />";
    }
    bir();
    ?>
</body>
</html>