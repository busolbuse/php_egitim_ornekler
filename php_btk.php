<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="todo_list.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Extra Eğitim</title>
    <style>
    body{
        background-color: black;
        color: white;
    }
</style>
<script type="text/javascript" language="javascript">
    function Deneme(){
        document.getElementById("IslemAlani").innerHTML = "Extra Eğitim" ;
    }
</script>
</head>
<body>
    <?php 
     echo "Buse Berren ÜNAL<br /><br  /> ";
    ?>
    <input type="button" onClick="Deneme();" value="Işlem Yap"><br /><br  />
    <div id="IslemAlani"></div> 
</body>
</html>