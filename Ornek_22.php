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
    <form action = "sonuc.php" method="post">
       isim: <input type="text" name="kullaniciadi" ><br />
       soyisim:  <input type="text" name="kullaniciadisoyadi" ><br />
       <input type="submit" value="GONDER" ><br /> 
       <?php

 ?>
    </form>
    <?php
 // bu  örnekte ben post için yaptım aynıları get içinde olur 
 // post ile gönerirken ya request ile alınmalı ya da post ile alınmalı
 //ama get göneriyorsak get ve rquest ile alınır
 //nasl gönderildiğini bilmiyorsanız request ile alınır.
 // port ile gnderip request ile alırsak güvenli olmaz. çok kritik olmayan yerlerde belki kullanılabilir.
    ?>
</body>
</html>