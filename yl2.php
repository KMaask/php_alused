<?php

/* 02 Kristi Maask 24.11.2020 */

$arv1 = 12;
$arv2 = 10;
$liitm = $arv1 + $arv2;
$lahut = $arv1 - $arv2;
$korru = $arv1 * $arv2;
$jagam = $arv1 / $arv2;
$jaak = $arv1 % $arv2;

echo "$arv1 + $arv2 = $liitm
$arv1 - $arv2 = $lahut
$arv1 * $arv2 = $korru
$arv1 / $arv2 = $jagam
$arv1 % $arv2 = $jaak\r\n";

$milli = 12324;
$senti = round($milli / 10, 2);
$meetr = round($milli / 1000, 2);

echo "$milli mm sentimeetrites on $senti cm ja meetrites $meetr m.\r\n";

$a = 10;
$b = 20;
$c = 22.36;
$s = ($a*$b)/2;
$p=$a+$b+$c;

echo "Kolmnurga pindala on $s cm².
Kolmnurga ümbermõõt on $p cm.";