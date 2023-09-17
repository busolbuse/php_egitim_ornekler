<?php
namespace projelerbuse; // satır 105 ile alakalı.
//kesinlikle üstünde hiçbir kod yazılı olmamalı aksi takdirde hata .
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
//                        :DİZİLER İÇİN FONKSİYONLAR:

// count() : dizi içinde eleman sayısını bulma , sizeof()
//diziler çok boyutlu olunca bunların içinde bir özellik kullanılır --> COUNT_RECURSIVE:
$isim = array("buse","berren","unal","lala");
$dizininelemansayisi = count(($isim));
echo $dizininelemansayisi."<br>";// 4
$dizininelemansayisi2 = sizeof(($isim));
echo $dizininelemansayisi2 . "<br>";// 4
$isim = array("isim1"=>"buse","berren","unal","lala");
// anahtar kullanılınca da sıkıntı olmaz
// ÇOK BOYUTLU DİZİ DE:
$isim = array("buse","berren","unal","lala",array("abo","aa"));
$dizininelemansayisi3 = count($isim , COUNT_RECURSIVE);
echo $dizininelemansayisi3 . "<br>";// 7  diziyi de ekstra 1 eleman olarak ekler ve dizinin içindeki elemanları da sayar yani hep fazladan 1 gelicek.
// her boyutu sayar istersek arttırabşlilriz.
//nereye kadar sayması gerektiğini de belirleyebilirliz.
// yine köşeli parantez yardımıyla yazdığımız anahtara yani sayıya kadar sayacaktır.

//------------------------------------------------------

//          array_unshift(): diizinin en başına eleman eklemek için/ dahil edilmiş haliyle eleman sayısını da döndürür./içeriği döndrmesi için bir değişkenin içine alırız.
//          array_push() : sonuna eklenecek / dahil edilmiş haliyle eleman sayısını da döndürür. /içeriği döndrmesi için bir değişkenin içine alırız.

array_unshift($isim, "ana");
print_r ($isim) ;// başoına ana ekledi

array_push($isim);
print_r($isim);
// yeni eklenenlere anahtar ekler .
//çoklu boyutlu diziler içinde mantık aynıdır.

//------------------------------------------------------

//array_shift(): ilk elemanı siler. silinen elemanın değerini geri döndürür./içeriği döndrmesi için bir değişkenin içine alırız.
// array_pop(): son elemanı siler.silinen elemanın değerini geri döndürür./içeriği döndrmesi için bir değişkenin içine alırız.

array_shift($isim);
print_r($isim);// 
array_pop($isim);
print_r(($isim)) ;
// çoklu boyutta da aynı işlemler yapılır.
// anahtarlar tekrardan düzenlenir ,anahtar değeri rakam yada string olsa dahi.

//------------------------------------------------------

// key() : dizinin göstericisi konumundaki elemanın anahtarını bulmak için kullanılır.
// eğer dizinin konumu değiştirilmediyse dizinin ilk elemanı her daim göstericisidir.  yani direkt ilk elemanı bulduk.
// konum değiştirildiyse gösterici konumundakini bulur. key(). 

$isim = array("isim1"=>"buse","berren","unal","lala");
$sonuc12 = key($isim);
echo $sonuc12 . "<br>"; // göstericisi konumundaki değerin anahtarını verdi : isim1
//yani konumu değiştirilmediği için ilk değerin anahtarını verdi.
// array içinde aynı.

//------------------------------------------------------
// current(): göstericisi konumundaki elemanı bulmak içn
//pos():  göstericisi konumundaki elemanı bulmak içn

$sonuc = current($isim);
echo $sonuc;// buse
$sonuc = pos($isim);
echo $sonuc . "<br>" ;// buse

//------------------------------------------------------
// end(): dizi göstericsinin son konumundaki elemanı bulmak için
$sonuc = end($isim);
echo $sonuc. "<br>";// lala

//------------------------------------------------------
// next(): dizinin gösterici konumundaki elemanını yad a anahtarını  konumu bir ileri
// prev():dizinin gösterici konumundaki elemanını yad a anahtarını  konumu bir  geri 
//reset(): dizinin gösterici konumundaki elemanını yad a anahtarını  konumunu ilk haline.

$isim = array("isim1"=>"buse","isim2"=>"berren","isim3"=>"unal","lala");
$varsayilananahtardegeri = key($isim);
echo $varsayilananahtardegeri . "<br>";//isim1

next($isim);
$gostericininananahtardegeri = key($isim);
echo $gostericininananahtardegeri . "<br>";//isim2

prev ($isim) ;
$gostericininananahtardegeri=key($isim);
echo $gostericininananahtardegeri . "<br>";//isim1

next($isim);
$gostericininananahtardegeri = key($isim);
echo $gostericininananahtardegeri . "<br>";//isim2

next($isim);
$gostericininananahtardegeri = key($isim);
echo $gostericininananahtardegeri . "<br>";//isim3

reset($isim);
$resetinagostericisikonumundekielemanahtardegeri = key($isim);//0
echo $resetinagostericisikonumundekielemanahtardegeri . "<br>";//isim1
//------------------------------------------------------
// explode(): belirtilen ayrace göre düz bir metni parçalar.
// implode(): diziyi birleiştirerel metin oluşturur.
// list():  dizi içindeki elemanları değişkenlere atamak için
// array_merge(): birden fazla diziyi birleştirerek yeni bir dizi oluşturur.
// array_merge_recursive(): birden fazla diziyi birleştirerek yeni bir dizi oluşturur. GELİŞMİŞ HALİ.
// array_combine: iki farklı diziyi ilişkisel olarak birleştirerek yeni dizi oluşturur.

$isim = array("isim1"=>"buse","isim2"=>"berren","isim3"=>"unal","lala");
$isim2 = array("isim1"=>"berren","isim2"=>"buse","isim3"=>"unal","lala");
$sonuc = array_combine($isim, $isim2);
print_r( $sonuc ); //Array ( [buse] => berren [berren] => buse [unal] => unal [lala] => lala ) 
echo "merhaba"."<br>";
// anahtarların farklı olamsı ya da aynı olamsı bir şey değiştirmez.
// array_slice():  dizinin belirli bölümlerini ayırmak için 

$isim = array(0 =>"buse",1 =>"berren","isim3"=>"unal","lala");
$sonuc = array_slice($isim, 1);
print_r( $sonuc );// çıktı : Array ( [0] => berren [isim3] => unal [1] => lala )
//------------------------------------------------------
// array_splice(): dizinin belirli bölümünü alıp,silip,eğer belirtilirse yeni elemanlarda ekleyerek yeni bir dizi oluşturmak için kullanılır.
//çok gelişmiştir çoğu şeyi yapar.
$isim = array("isim1"=>"buse","isim2"=>"berren","isim3"=>"unal","lala");
array_splice($isim, 4);
print_r( $isim );
// eğer değişkene atarsak belirttiğimiz değişkneden sonra kalanları yazar diğerinde ise direkt belirttiğimiz yere kadar yazar -ÖNEMLİ FARK
//------------------------------------------------------
// array_chunk(): dizinin belli bölümlerini alıp parçalayarak yeni bir çok boyutlu  bir dizi oluşturulur.
$isimlerim = array("ali","veli","hasbi","lala","hale","buse","berren","unal","merhaba");
$sonuccc = array_chunk($isimlerim,3);
echo "<pre>";
print_r($sonuccc);
echo "</pre>";
/* çıktı :
Array
(
    [0] => Array
        (
            [0] => ali
            [1] => veli
            [2] => hasbi
        )

    [1] => Array
        (
            [0] => lala
            [1] => hale
            [2] => buse
        )

    [2] => Array
        (
            [0] => berren
            [1] => unal
            [2] => merhaba
        )

) */

// anahtar olursa bişi değişmez.

//------------------------------------------------------
// array_column(): çok boyutlu dizi için elemanları belirtilecek olan anahtar koşullarına göre biçimlendirerek yeni bir dizi oluşturur.

$isimlerim = array("ali","veli","hasbi","lala", array("hale","anahtar"=>"buse","berren",array("anahtar"=> "lala","mause")), "anahtar"=> "unal","merhaba");
$snuc = array_column($isimlerim,"anahtar");
print_r($snuc);

//------------------------------------------------------

// array_intersect(): birden fazla dzi içinde bulunup aynı eleman değerine sahip olanlarda karşılaştırma yapıyor ve kesişen değerleri alıyor.
// array_intersect_key(): aynı anahtar değerine sahip olanlarda karşılaştırma yapıyor ve kesişen değerleri alıyor.
//array_intersect_assoc(): hem aynı eleman değerine hem de aynı anahtar değerine sahip olanlarda karşılaştırma yapıyor ve kesişen değerleri alıyor.


//------------------------------------------------------







   
 ?>   
</body>
</html>