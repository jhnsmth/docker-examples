<?php

// see https://www.php.net/manual/en/language.types.php 



// PHP program to illustrate gettype() function
  


$var1 = true; // boolean value 
$var2 = 3; // integer value
$var3 = 5.6; // double value
$var4 = "Abc3462"; // string value
$var5 = array(1, 2, 3); // array value
$var6 = new stdClass; // object value
$var7 = NULL; // null value
$var8 = tmpfile(); // resource value
  
var_dump($var1);
var_dump($var2);
var_dump($var3);
var_dump($var4);
var_dump($var5);
var_dump($var6);
var_dump($var7);
var_dump($var8);
  
function add(int $a, int $b): int {
    return $a + $b;
}

var_dump(add(3.5,4.7));
var_dump(add(3,4));


?>