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

//      goto:          Kodlama dosyası içeriisnde hedeflenmiş,imlenmiş satıra atlama koşulu sağlamak için kullanılır. 
// yapısı: goto  IN/HEDEF
// yer: IN/HEDEF


goto BURASIBİRYER; // dersek kodda burasıbiryer  i yani im i yani hedefi görene kadar olan yerleri çalıştırmayacak 
echo "buse tatli<br >";
echo "berren tatli<br >";
BURASIBİRYER://BU BİR İM HEDEF YANİ 
echo "ünal tatli<br >";

// hedefi istediğimiz yere koyabiliriz.
// goto ifadesi için belirtilecek olan im /hedef  bir değişkenden gelemez
echo "merhaba";

genel:
echo "lalalalal<br >";
$deger = 1;
/*if($deger == 1){
    goto genel;
    $deger = 2;
}elseif($deger == 2){
    goto BURASIBİRYER;
    $deger = 3;
}*/


//---------------------------------------------------------------------

//              İSTISNALAR VE KULLANIMLARI

/* try = Hata oluşturabilicek kodlar için kullanılır.
   catch = hata oluşursa çalıştırılacak kodlar için kulanılır.
   finally = hata oluşsa da oluşmasa da çalıştırılacak kodlar için kulanılır.
   throw  = hata oluşabilicek kodlar için istisnai duurmlarda kullanılır.
   excemption = tüm istisnalar iiçin önceden tanımlı temel sınıfı çağırmak için.
   getMessage() = tüm istisnalar iiçin oluşturulacak olan iletilerin atandığı veri tutuculardır.

   yapısı :

   try{
    kod blokları 
   }catch(){ // bu parantezler atama için.

   }
    */
    $deger1 = 100;
    $deger2 = 0; 

   // echo $deger1/$deger2; // bu kod hataya sebebiyet verir.

    //---------------------------------------------------------------------
    try{
        $deger1 = 100;
        $deger2 = 0; 
    
        if($deger2 == 0) {// burada biz bölme iişlemi yaptığımız için oluşabiilicek olası hatayı önelemk amaçlı if bloğu açtık.
            throw new Exception("hatalı bir işlme yapılıyooooooooooooooo!!!!!!!<br>");
        }




        echo $deger1/$deger2;
    }catch(Exception $sonuc){
        echo $sonuc->getMessage();
    }
    //---------------------------------------------------------------------
    $isim = "berren";

    try{
        
        if($isim == "buse"){
            echo "merhaba buse nasılsın?<br>";
        }else{
            throw new Exception("sen kimsin? buse değilsin sennn abo !!!!<br>");
        }
    }catch(Exception $sonuc){
        echo $sonuc->getMessage();
    }
    //birden fazla throw ifadesi olabilir.

    //---------------------------------------------------------------------
    //                          HATA RAPOLAMA İŞLEMLERİ
    // errorlog dosayası vardır sunucu üzerinde oraya kaydedilir.
    /* error_reporting : hata raporlama işlemlerinde bulunan hata seviyelerinin ayarlanma işlemleri için kullanılır.
       HATA SEVİYELERİ: 
            E_ALL : tüm seviye hataları : -1
            E_ERROR : öenmli olan çalışma zamanı hataları
            E_WARNING : Önemli olmayan çalışma zamanı uyarıları
            E_PARSE : derleme zamanı ayrıştırma hataları
            E_NOTICE : çalışma zamanı bildiirmleri
            0 : seviye hataları kapatması  */

    trim(" buse berren unalll bosluk kalktı ");// boşluk kaldırır ama bu kodun içine parametre yazmazsak bb bir hatadır.
   // trim(); // hata.
    trim(E_ALL ^ E_WARNING); // Burada parametre olarak her hatayı geritr ama uyarıları getrime dedik.
    error_reporting(E_PARSE);

    //---------------------------------------------------------------------
    // kritik olmayan hataları görmemek için başına @ konur.
    

?>




 ?>   

</body>
</html>