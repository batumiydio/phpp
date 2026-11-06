<?php
function topla($a ,$b){
    return $a + $b;
}
echo topla(5,10);

?>

 soru1
<?php
$not = 70;

if($not > 50){
    echo "Geçti";
}
else{
    echo "Kaldı";
}


?>
soru2
<?php
for($sayı = 0; $sayı<=10; $sayı++)
    echo  $sayı .  "<br>" ;


?>

soru3
<?php
$meyveler =["elma","armut","muz"];
foreach ($meyveler as $liste){
    echo $liste .  "<br>";

   


}
echo count($meyveler);



?>


<?php
$sayilar =[5, 12 ,8 ,20];
foreach ($sayilar as $sayi){
    if($sayi >10){
        echo $sayi;
    }
}



?>


