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

// array_diff() : birden fazla dizi içinde farklı eleman değerine sahiplerden yeni oluşturur.
// array_diff()_key: aynısının anahtar için
//array_diff()_assoc(): her ikisi için aynanda 

//birinci dizi baz alınır her zaman.

$meyve = array('Apple', 'Banana', 'Orange', 'Mango', 'Strawberry', 'Grapes');
$renkler = array('Red', 'Blue', 'Green', 'Yellow', 'Orange', 'Purple' , 'Mango', 'Strawberry');
$sonuc = array_diff($meyve,$renkler);

echo "<pre>"; print_r ($sonuc) ; echo "</pre>" ;
/* çıktı : 
Array
(
    [0] => Apple
    [1] => Banana
    [5] => Grapes
)*/


//------------------------------------------------------
// array_replace(): dizideki elemanları birleştirir, karşılaştırır ve günceller
            // En az 2 parametre alır. İlk parametre değiştirilecek dizi, diğer parametreler de değiştirilecek değerlerden
            // oluşan dizilerdir. İkinci dizide olup ilk dizide olmayan eleman ilk dizide de oluşturulur. Fonksiyon birden fazla güncelleyici 
            //dizi alabilir ve her zaman en son eklenen güncelleyici dizi içerisindeki değer geçerlidir.

$sonuc = array_replace($meyve,$renkler);
echo "<pre>"; print_r ($sonuc) ; echo "</pre>" ;
/* ÇIKTI :
Array
(
    [0] => Red
    [1] => Blue
    [2] => Green
    [3] => Yellow
    [4] => Orange
    [5] => Purple
    [6] => Mango
    [7] => Strawberry
)*/


//------------------------------------------------------
// array_filter(): boş elemanları veya elemanları filtreleyerek yeni bir dizi oluşturulur.
// array_unique(): dizinin içindeki elemanların fazla olanını silerek yeni bir dizi oluşturur.

$renkler2 = array('Red','Red','Red', 'Blue', 'Green', 'Green', 'Green', 'Yellow', 'Orange', 'Purple' , 'Mango', 'Strawberry');

$sonuc = array_unique($renkler2);
echo "<pre>"; print_r ($sonuc) ; echo "</pre>" ;/*
ÇIKTI :
Array
(
    [0] => Red
    [3] => Blue
    [4] => Green
    [7] => Yellow
    [8] => Orange
    [9] => Purple
    [10] => Mango
    [11] => Strawberry
) FAZLA OLAN VERİLERİ SİLDİ.
*/


//------------------------------------------------------
// range(): belirtilen değer aralıkları doğrultusunda doldurma işlemi yaparak teni bir dizi oluşturur.
// array_fill(): belirtilen değerler doğrulturusunda doldurma işlemi
//array_fill_keys():anahtar yapar her şeyi

//------------------------------------------------------
// compact(): elemanlaı anahtar gibi görerek ,atnı isimle tanımlanmış değişkenlerden ilgili anahtarlara değer üretmek amaçlı
//array_keys(): dizinin anahtarlarını alıp yeni bir dizi oluşturmal için 
// array_value(): aynısının değerleri alıp hali 
//------------------------------------------------------
// array_pad(): elemanlarını alarak belirtilecek değerler doğrltusunda baştan ve sondan doldurma yapar.
// array_search(): elemanı ve anahtarı aramak için 
// array_key_exists(): aranan anahtarın olup olamdığını
//in_array(): elemanın olup olmadığını.

//------------------------------------------------------
// array_count_values(): elemanların kaçar defa tekrarlandığını bulmak için.

$sonuc = array_count_values($renkler2);
echo "<pre>"; print_r ($sonuc) ; echo "</pre>" ;/* ÇIKTI 
Array
(
    [Red] => 3
    [Blue] => 1
    [Green] => 3
    [Yellow] => 1
    [Orange] => 1
    [Purple] => 1
    [Mango] => 1
    [Strawberry] => 1
)   */


//------------------------------------------------------
// array_flip(): elemanların yer değişmesi
// array_sum(): elemanların rakamsal değer içermesi durumunda tüm elemanları  toplamı
// array_product : çarpımını 
// array_rand(): belirtilen eleman sayısı kadar rastgele döndğrmek için 
// array_reverse: eleamnların tersten yazılamsını sağlayar

//------------------------------------------------------
//suffle(): elemanların sıralarının karıştırılması için 
// anahtarlar varsa bu işlem sorasında göz ardı edilir.
//ksort():a dan z ye küçükten büyüğe sıralar.
//krsort(): z den a ya küçükten büyüğe sıralar.


//------------------------------------------------------
// array_multisort(): birden fazla elemanı gelişmiş olarak çok yğnlü sıralamak
// SORT_ASC : A DAN Z YE KÜÇÜKTEN BÜYÜĞE
// SORT_DESC :  Z DEN A YA BÜYÜKTEN KÜÇÜĞE
//SORT_REGULAR : STANDART SIRALAMA(VARSAYILAN)


 ?>   
</body>
</html>