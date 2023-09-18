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

//                      _Null koşul ifadesi -post ile


    $gelenisimdegeri = $_POST["kullaniciismi"] ?? "HATA";// ?? den sonra istediğimizi ekleyebiliriz ister başka bir sayfaya yönlendirilsin 
    //kötü amaçlı kullanıcılar input u silebiliyor bunu önlemek için bu şekilde yapılır.
    $gelensoyisimdegeri = $_POST["kullanicisoyismi"]  ?? "HATA";// genelde başka sayfalara yönlendirilir.
    echo "fromdan gelen isim degeri : " . $gelenisimdegeri ."<br>";
    echo "fromdan gelen soyisim degeri : " . $gelensoyisimdegeri ."<br>";

 ?>   
</body>
</html>