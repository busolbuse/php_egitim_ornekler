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
    echo "<br />";
    $OrnekBir = "berren";
    $deneme = $OrnekBir; //iç içe
    echo $deneme;
    echo "<br />";

    echo "referanslı atarsak:";

    $OrnekBir = "BUSE";
    $deneme = &$OrnekBir; //iç içe
    echo $deneme;
    echo "<br />";
    $OrnekBir = "berren";
    $deneme = $OrnekBir; //iç içe
    echo $deneme;
    echo "<br />";
    ?>
    <?php
    
    ?>
</body>
</html>