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
    echo  "global çalışmaları 3  " . "<br />";
    echo  $deger = $_SERVER["PHP_SELF"] . "<br />"; 
    echo "bu bize dönen değer öalışmakta olduğumuz php dosyasının domain alanı dahil edilmeden çalışma phat i " . "<br />";
    echo  $bu = $_SERVER["HTTP_ACCEPT"] . "<br />"; 
    echo  $LU = $_SERVER["HTTP_HOST"] . "<br />"; 
    echo  $LA = $_SERVER["HTTPS"] . "<br />"; 

    ?>
</body>
</html>