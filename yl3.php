<?php
/* 03 Kristi Maask 26.11.2020 */

$a = $_GET['a'];
$b = $_GET['b'];
$h = $_GET['h'];
$s = round((($a+$b)*$h)/2,1);

$c = $_GET['c'];
$p = round(4*$c,1);

echo "Trapetsi pindala arvutamine<br>";
echo "Alus a: $a cm<br>";
echo "Alus b: $b cm<br>";
echo "Kõrgus h: $h cm<br>";
echo "Trapetsi pindala on $s cm².<br><br>";
echo "Rombi külg a: $c cm<br>";
echo "Rombi ümbermõõt on $p cm.";



