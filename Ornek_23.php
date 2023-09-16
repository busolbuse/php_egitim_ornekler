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
    <form action = "Ornek_23_1.php" method="post" enctype="multipart/form-data">
    Seçiniz : <input type="file" name="Dosya">
    <input type="submit" value="Dosyayı Yükleyin">
    <?php

 ?>
    </form>
    <?php
    echo "NOTE: birden fazla parçaçıklı bir şey yani file gönderileceği için muhakkak POST ile gönderilmeli. GET OLMAZ";
    ?>
</body>
</html>