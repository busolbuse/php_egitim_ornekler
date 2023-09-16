<?php
    session_start();// bu üste yerleştirilmeliymiş.
    //cokie ler silinmiş olamlı onu kontrol et.
    //cookie e göre daha güvenli.
    ?>
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
    $_SESSION["oturummm"] = "anaaaa";// bu tarayıcıda baktığımızda anna değil de başka bir şey yazılı olur.
    //bu oturumun içeriğine sadece sunucu tarafında görüntülenebilir
    //temp diizninde tmp klasöründe yani sunucu tarafında tutulan t-yer.
    // odosayıyı açarssak yazdığımız şeklinde görünür.

    ?>
    <?php
    
 ?>
    </form>
   
</body>
</html>