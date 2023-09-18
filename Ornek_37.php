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
//---------------------------------------------------------------------
//                               DÖNGÜLER
$basangic = 1;
while($basangic <= 10){
echo $basangic ."<br>";
$basangic++;
}

do{
    echo $basangic ."<br>";
    $basangic ++;
}while($basangic <=50);

for($basangic =1 ; $basangic <= 10 ; $basangic ++){
    echo $basangic ."<br>";
}


$isimler = array("buse","berren","unal",array("aslı","hale","ben"),"lala");

if(is_array(($isimler))){// if in içine yazdığımız şey eğer arrayse bu devam et şeklinde is_array
    echo "dizidir<br>";
    }else{
        echo "dizi değil <br>";
    }


foreach($isimler as $icerik){
    echo $icerik . "<br>";// şimdi burda array içinde array i görünce hata olrak veirir ve iç içe olan array i yazdırmaz.

    if(is_array($isimler)){// if in içine yazdığımız şey eğer arrayse bu devam et şeklinde is_array
        echo "burada bir dizi var <br>"; // diziyi yakalık burada.
        // burada artık bir döngü daha açmalıyız.

            foreach($icerik as $degerr){// $icerik i degerr adında değişkene atadık.
                echo $degerr . "<br>"; // burası array in geldiği yer.
        }
        }else{
            echo $icerik . "<br>";
        }

}

// ya da daha farkllı şekilde yapabilirz.

foreach($isimler as $anahtar => $icerik){
    echo $icerik . "<br>";// şimdi burda array içinde array i görünce hata olrak veirir ve iç içe olan array i yazdırmaz.

    if($anahtar == 3){
        echo "burada bir dizi var <br>"; 

            foreach($isimler[3] as $degerr){// $isimler[3]diyerek manuel yakaladık onun yerine direkt $icerik diyerek de yakalayabilirdik.
                echo $degerr . "<br>"; 
        }
        }else{
            echo $icerik . "<br>";
        }

}

//---------------------------------------------------------------------


$bas = 1000;
while($bas <=1000){
    $bas ++;
    echo $bas;
    if($bas == 5 ){
        break;
    }
}

//---------------------------------------------------------------------

$sayi = 1;
while($sayi <= 50){
    $sayi++;
    if(($sayi>10) and ($sayi<=20)){
        continue;
    }
    
    echo $sayi ."<br>";
   
}







?>

</body>
</html>