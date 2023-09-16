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
    echo "cocikeeeeeeeeeeeeeee" . "<br />";
    ?>
    <?php
    setcookie("extra","buse berren");//bunu çalıştırılıp sekme kapanana kadar kodu silsek bşle orda kayır-tlı durur.
    //tarayıcıya yerleştirildikten sonra bu üsteki kod kapatılabilir.
    $cerez = $_COOKIE["extra"];
    echo $cerez;
 ?>
    </form>
   
</body>
</html>