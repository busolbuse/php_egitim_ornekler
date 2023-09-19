
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
//                 :  COOKİE(ÇEREZ) ve SESSION (OTURUM) YÖNTEMLERİ:


// setcookie() : belirtilen değerler doğrultusund cookie oluşturur veya siler.
//            PARAMETRELER:  1 - cerez adı, 2- cerez degeri , 3- cerez yasam süresi(belirtmezsek tarayıcı açık olduğu sürece.)

setcookie("kullaniciadi","buse");
// print_r($_COOKIE);     // ÇIKTI : Array ( [kullaniciadi] => buse )
// bir cookie oluşunca illa kodda setcookie kalmak zorunda değil tarayıcıda depolanır.
// takii yaşam süresi bitene kadar.

$yasamsuresi = time() + (60 * 5);
setcookie("yenicookie", "neww", $yasamsuresi);


// array ile oluşturma
// köşeli ile alt başlıklara almış olduk 
// bunu yazdırırsak normal bir cookieden farklı şekilde olup,dizi halinde olucak.
setcookie("sepet[id]", 5 , $yasamsuresi);
setcookie("sepet[odemeturu]", "kredikarti", $yasamsuresi);
setcookie("sepet[Turari]", 1000 , $yasamsuresi);
setcookie("sepet[Taksit]", 3 , $yasamsuresi);

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
/*           ÇIKTI : 
Array
(
    [kullaniciadi] => buse
    [yenicookie] => neww
    [sepet] => Array
        (
            [id] => 5
            [odemeturu] => kredikarti
            [Turari] => 1000
            [Taksit] => 3
        )

) */
// GÖRÜLDÜĞÜ ÜZERE YANIDA VERDİĞİMİZ 1.PARAMETRE ANAHTARLARI 2. PARAMETRE DEĞERLERİ OLDU .
//  en başta oluşturduğuuz cookie i de alarak yaptı çünkü kod bloğundan silsek bile tarayıcı da kayılı kaldığından onu da dahil etti .




                     







?>






</body>
</html>