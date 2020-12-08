<?php
$u= $_GET['u'];
$g= $_GET['g'];
echo "При u=$u,<br>g=$g<br>";
$v=pow(($g-2*$u),2)-(($u*cos($g))/(3-4*$u));
echo "Результат становить $v";
$exampleFile = fopen("Resultat.txt", "a+");
fwrite($exampleFile, "\nРезультат обчислень : $v");
fclose($exampleFile);
?>
