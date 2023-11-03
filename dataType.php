<?php

// 1. integer
$intVar = 1234;
echo $intVar."<br>"; // 1234
// check Data Type
var_dump($intVar); // int(1234)

// 2. float
$floatVar = 20.45;
echo "<br>".$floatVar."<br>"; // 20.45
var_dump($floatVar); // float(20.45);

// 3. string
$strVar = "Lakshman";
echo "<br>".$strVar."<br>"; // Lakshman
var_dump($strVar); // string(8) "Lakshman"

// 4. null
$nullVar = null;
echo "<br>".$nullVar."<br>"; // nothing
var_dump($nullVar); // NULL

// 5. array
$arr = array("HTML","CSS","JS",123);
echo "<br>".$arr[2]."<br>"; // JS
var_dump($arr); // aarray(4) { [0]=> string(4) "HTML" [1]=> string(3) "CSS" [2]=> string(2) "JS" [3]=> int(123) }

// 6. Boolean
$boolVar = true;
echo "<br>".$boolVar."<br>"; // 1
var_dump($boolVar); // bool(true)

$anotherBool = false;
echo "<br>".$anotherBool."<br>"; // nothing
var_dump($anotherBool); // bool(false)

?>