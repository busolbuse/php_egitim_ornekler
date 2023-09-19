
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
//---------------------------------------------------------
//                      DOSYA İŞLEMLERİ

//include(): php dosyasına belirtilecek olan yeni bir php dosyasına dahil etmek.
/*          -Yeni dosyanın daha önceden eklenip eklenmediği kontrol EDİLMEZ.
            - hata kodu donse de kod okunmaya devam eder.



include_once():  php dosyasına belirtilecek olan yeni bir php dosyasına dahil etmek.
            -Yeni dosyanın daha önceden eklenip eklenmediği kontrol edilir.
            - hata kodu donse de kod okunmaya devam eder.


require():  php dosyasına belirtilecek olan yeni bir php dosyasına dahil etmek.
            -Yeni dosyanın daha önceden eklenip eklenmediği kontrol EDİLMEZ.
            - hata kodu donse de kod okunmaya devam ETMEZ.



require_once() :  php dosyasına belirtilecek olan yeni bir php dosyasına dahil etmek.
            -Yeni dosyanın daha önceden eklenip eklenmediği kontrol edilir.
            - hata kodu donse de kod okunmaya devam ETMEZ.
*/


echo "buse . <br>";
include("Ornek_42_1.php"); // parantessiz de yazılır.
echo "son satır . <br>";

echo "buse . <br>";
require("Ornek_42_1.php"); // parantessiz de yazılır.
echo "son satır . <br>";

// şimdi hata alamlarında ne olucağını deniyelim:
// olmayan bir dosya ekleyelim

echo "buse . <br>";
include("yokboylebidosya.php");
echo "son satır . <br>"; /*Burada hata kodu geldi fakat çıktı da hem - buse . -
hem de -son satır.- yine yazıldı .
*/

echo "buse . <br>";
include_once("yokboylebidosya.php");/*Burada hata kodu geldi fakat çıktı da hem - buse . -
hem de -son satır.- yine yazıldı .
*/
echo "son satır . <br>";


echo "buse . <br>";
require("yokboylebidosya.php"); // sadece ilk olan -  buse . - ı çıktı olarak verdi.
echo "son satır . <br>";// bunu yazmaz.


echo "buse . <br>";
require_once("yokboylebidosya.php");  // üste hata aldığı için bu kodları da okumadı.
echo "son satır . <br>";

?>






</body>
</html>