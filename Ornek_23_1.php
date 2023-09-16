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
    $gelenDosya = $_FILES["Dosya"]; // ekrana dizi gelir ve hata kodu gelir
    print_r($gelenDosya);//arrayleri sadece print_r ile yazdırabililirz.
    //gelen bilgiler dosyanın bilgisi olucaktır.
    // ve yüklenicek yer de yazıyor , dosya parça parça temp dizinini yüklenir ama kullanmazsak silinir yani kısacası geçici dizin.
    echo "gelen dosyanın adı: " . $_FILES["Dosya"]["name"]. "<br />";
    // bu şekilde gelen dosyanın ismini de yazdırabilirliz.
    echo "gelen dosyanın adı: " . $_FILES["Dosya"]["type"]. "<br />";
    echo "gelen dosyanın adı: " . $_FILES["Dosya"]["size"]. "<br />";    

?>
    </form>
    <?php
    
    ?>
</body>
</html>