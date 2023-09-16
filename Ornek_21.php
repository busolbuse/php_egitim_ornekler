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
       isim: <input type="text" name="ad" ><br />
       soyisim:  <input type="text" name="soyad" ><br />
       <input type="submit" value="GONDER" ><br /> 
       <?php
 // post da get de olanlar gelmiyor url de fln 
 // da kesinlikle url den oynama yapamayız!
 ?>
    </form>
    <?php
 
    ?>
</body>
</html>