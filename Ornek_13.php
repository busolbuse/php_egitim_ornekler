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
    $OrnekBir = "BUSE";
    $deneme = $OrnekBir; //iç içe
    echo $deneme;
    $Ornekiki = "BUSE";
    $deneme = "Merhaba {$Ornekiki} NASILSIN"; //daha da iç içe
    echo $deneme;
    $Ornekuc = "BUSE";
    $Ornek4 = "ünal";
    $deneme = "Merhaba {$Ornekuc} $Ornek4 NASILSIN";
    echo $deneme;
    ?>
    <?php
    
    ?>
</body>
</html>