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
    $deger = "Buse Berren Ünal _değişkem oluşturma eğitimi-10.egitim-"
    //degisken ismi rakamla başlayamaz. ama sona ya da ortaya konabilir.
    ?>
    <?php
    $deger1 = "deger1  seklinde oldu  " ;
    echo $deger1 ;
    $deger_ = "deger_";
    echo $deger_ ;
    //tr karakteri olmaz değişkende
    // aynı degisken işlemi olursa son olan baz alınır.
    $deger_ = "deger_ sonnnnn";
    echo $deger_ ;
    ?>
</body>
</html>