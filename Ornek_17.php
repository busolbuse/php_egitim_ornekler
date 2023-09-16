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
    function deneme(){//fonksiyonun içi local alandır.
        $buse = "buse"; //NORMALDE LOCAL ALAN
        $GLOBALS["buse"] = "buse" ;// global yaptık
        // böyle yapmasaydık anlamazdı fonksiyonu. 
    }
    deneme(); //çalışınca hata vermez.
    echo $buse . "<br />";
    echo  $GLOBALS["buse"]; // istersek bu şekilde de çağırabiliriz.
    ?>
</body>
</html>