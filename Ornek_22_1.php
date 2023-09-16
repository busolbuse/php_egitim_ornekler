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
    $gelenisim = $_REQUEST["kullaniciadi"];
    $gelensoyad = $_REQUEST["kullaniciadisoyadi"]; 
    //hem post ile gelen hem de get ile gelenlerin request ile alırız.
    
    echo $gelenisim . " " . $gelensoyad;
 ?>


</body>
</html>