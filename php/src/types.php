<?php

// see https://www.php.net/manual/en/language.types.php 



// PHP program to illustrate gettype() function



$var1 = true; // boolean value 
$var2 = 3; // integer value
$var3 = 5.6; // double value
$var4 = "Abc3462"; // string value
$var5 = array(1, true, "asdf"); // array value
$var6 = new stdClass; // object value
$var7 = NULL; // null value
$var8 = tmpfile(); // resource value

var_dump($var1);
echo "<br>";

$var1 = 4;

var_dump($var1);
echo "<br>";


var_dump($var2);
echo "<br>";
var_dump($var3);
echo "<br>";
var_dump($var4);
echo "<br>";
var_dump($var5);
echo "<br>";
var_dump($var6);
echo "<br>";
var_dump($var7);
echo "<br>";
var_dump($var8);

function add_without_types($a, $b) {
    return $a + $b;
}

function add_with_cast($a, $b) {
    return (int)$a + (int)$b;
}

function add(int $a, int $b): int
{
    return $a + $b;
}

var_dump(add_without_types(3.5, 4.7));
var_dump(add_without_types(3, 4));

var_dump((int)9.9)

?>