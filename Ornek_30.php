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
    //------------------------------------------------------
    //          :ARRAY:

    // DİZİNİN DEĞİŞKENİNİ ÖNCEDEN BELİRLEYİP VERİİY SONRADAN EKLEME:
    $degerler = array();
    $degerler[] = "veriekle1";
    $degerler[] = "veriekle2";
    $degerler[] = "veriekle3";
    $degerler[] = "veriekle4";

    echo "<pre>";
    print_r($degerler);
    echo "</pre>". "<br />";
    /* çıktı:
    Array
(
    [0] => veriekle1
    [1] => veriekle2
    [2] => veriekle3
    [3] => veriekle4
)
    */
    // cekme konusunda da aynı olucak
    echo $degerler[0];//veriekle1
    //------------------------------------------------------

    $Dizi = array("buse", "berren");
    $Dizi[] = "veriekle1";
    $Dizi[] = "veriekle2";
    $Dizi[] = "veriekle3";
    $Dizi[] = "veriekle4";

    echo "<pre>";
    print_r($Dizi);
    echo "</pre>" . "<br />";/* çıktı : Array
    (
        [0] => buse
        [1] => berren
        [2] => veriekle1
        [3] => veriekle2
        [4] => veriekle3
        [5] => veriekle4
    )
    
*/
//anahtar veriirsek de kaldığı yerden devam eder bir faklılık olmaz

//------------------------------------------------------


//          DİZİ İÇİNDEKİ İNDEX E AİT VERİNİN DEĞİŞTİRİLMESİ
    $array1 = array("buse", "berren","unal","beyza");
    //anahtar adı yazılarak değiştirilicek
    print_r($array1);
    $array1[2] = "degisti";
    print_r($array1);
    //kendi oluşturduğumuz anahat da değişebilir.
    //diğer her şey aynı mantıkla.

//------------------------------------------------------

//          Farklı bir değişkene atama DİZİYİ

    $lala = array("abo1","abo2","abo3");

    $deg = $lala; //diziyi farkli bir değişkene atama
    //elemanları alırken anahtarlarıyla birlikte alır.

//------------------------------------------------------
//          birden fazla dizi tek değişkene atama

    $is = array("buse", "berren");
    $renk = array("deneme" => "mavi", "gri");
    $sonuc = $is . $renk ; // bu bir hatadır
    //birleştirilirken anahtar değerleri çakışıcaktır bu yüzden aynı anahtara ait veriilerden sadece 1 i alınır.
    //her daim ilk dizinin anahtarı geçerlidir böyle bir durumda
    //farklı anahtara sahipse sorun olmaz.
    //farklı şekilde oluşturulmuş arraylerde bir değişiklik olmaz aynı şeyler yaşanır.

    print_r($sonuc);

    //peki ikiden fazla array oluşucak olursa işin içinden çıkılamaz anahtarları düzgün verilmiş olamlı.

    //------------------------------------------------------
    //         : iç içe çok boyutlu dizi oluşturma:
    
    $cokboyut = array("buse", "berren", array("mavi","beyaz",array("deneme","lala")));
    echo "<pre>";
    print_r($cokboyut);
    echo "</pre>";
    /* çıktı : 
        Array
    ( 1.boyut
        [0] => buse
        [1] => berren
        [2] => Array
            ( 2. boyut
                [0] => mavi
                [1] => beyaz
                [2] => Array
                    ( 3.boyut
                        [0] => deneme
                        [1] => lala
                    )

            )

    )*/
    // NOT: anahtarların tekrardan baştan verşlmeye başladığına dikkat
    // peki istediğimiz anahtara nasıl ulaşırız özellikle içtekinlere.
    
    $cokboyut2 = array("buse", "berren", array("mavi","beyaz"));
    echo $cokboyut2[0]  . "<br />";
    echo $cokboyut2[1]  . "<br />";
    echo $cokboyut2[2]  . "<br />";
    echo $cokboyut2[3]  . "<br />";
/* son iki echo da hata verir:
buse
berren

Warning: Array to string conversion in C:\xampp\htdocs\btk_egitim\Ornek_30.php on line 131
Array

Warning: Undefined array key 3 in C:\xampp\htdocs\btk_egitim\Ornek_30.php on line 132
*/

// çünkü echo kullanılmaz print kullanılıcak.
print_r($cokboyut2[2]);// çıktı : Array ( [0] => mavi [1] => beyaz )
// yazdırdık ama nasıl alıcaz.
echo $cokboyut2[2][0] ; // mavi yazdı 
// 2 diyerek arraye eriştik sonrasında 0 diyerek o eriştiğimiz arrayin 0 . index değerine ulaştık ve yazdırdık.

$cokboyut3 = array("buse", "berren", array("mavi","beyaz",array("deneme","lala", array("lalaylom", "cikolata"))));
    echo "<pre>";
    print_r($cokboyut3);
    echo "</pre>";/* çIKTI :
    Array
(
    [0] => buse
    [1] => berren
    [2] => Array
        (
            [0] => mavi
            [1] => beyaz
            [2] => Array
                (
                    [0] => deneme
                    [1] => lala
                    [2] => Array
                        (
                            [0] => lalaylom
                            [1] => cikolata
                        )

                )

        )

)*/

echo $cokboyut3[0]  . "<br />";
echo $cokboyut3[1]  . "<br />";
echo $cokboyut3[2][0]  . "<br />";
echo $cokboyut3[2][1]  . "<br />";
echo $cokboyut3[2][2][0]  . "<br />";
echo $cokboyut3[2][2][1]  . "<br />";
echo $cokboyut3[2][2][2]  . "<br />";
echo $cokboyut3[2][2][2][0]  . "<br />";




 ?>   
</body>
</html>