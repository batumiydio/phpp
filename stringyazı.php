<?php
$str = "Merhaba Dunya";

echo strlen($str);               // 13 (kaç karakter)
echo strtoupper($str);           // MERHABA DUNYA
echo strtolower($str);           // merhaba dunya
echo substr($str, 0, 5);         // Merha (0. karakterden 5 tane al)
echo str_replace("Dunya", "PHP", $str);  // Merhaba PHP
echo trim("  selam  ");          // selam (baş/sondaki boşlukları siler)


?>