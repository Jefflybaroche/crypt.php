<?php
require 'config/Crypt.php';



$crypt = new Crypt("haoti", "gruyb", 12345, 67890);


$text = "Baroche";

$Ctext = $crypt->Kripte($text);
echo $Ctext;
echo "<br>";
echo $crypt->DeKripte($Ctext);














?>