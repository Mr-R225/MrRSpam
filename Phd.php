<?php
include 'fajargansok.php';
/*
    https://github.com/nee48/BomSmsPhD
    Made by Handika Pratama
    Modified by ./CE.19
*/
$init = new Bom();
//Eksekusi Sms Boomber
echo " Target (pakai 62): ";
$a = trim(fgets(STDIN));
$init->no = "$a";
echo "Count: ";
$b = trim(fgets(STDIN));
$loop = "$b";
for ($i=0; $i < $loop; $i++) {
    $init->Verif($init->no);
}
