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
    echo "değişken değişken";
    echo "<br />";

    $OrnekBir = "BUSE";
    $$OrnekBir = "Berren"; 
    echo $OrnekBir;
    echo "<br />";
    echo $$OrnekBir;
    echo "<br />";

    echo "birden fazla değişken";
    echo "<br />";

    $Ornekiki = "BUSE";
    $Ornekuc = "Berren";
    $sonuc = "$Ornekiki $Ornekuc"; //pek güzel olmadı.

    echo $sonuc;
    echo "<br />";

    $bir= "BUSE";
    $iki = "Berren";
    $sonucc = $bir . " " . $iki; // daha düzenli oldu.

    echo $sonucc;
    echo "<br />";

    $birr= "BUSE";
    $ikii = "Berren";
    $ucc = 34;
    $sonucc = $birr . " " . $ikii . " " . $ucc . " " . "birden fazla değişkeni tek yazma" . " <br /> alta geçelim bi de!";
 

    ?>
</body>
</html>