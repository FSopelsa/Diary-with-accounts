<?php

$names = array("Rune","Felix","Kajsa-Stina","Olle","Pelle","Kalle");
shuffle($names);

$rune = array_search("Rune", $names);
var_dump($rune);

?>