<?php
$fileContent = file("Resultat.txt");
foreach ($fileContent as $oneLine) {
 echo $oneLine .", ";}
?>