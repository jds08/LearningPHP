<?php 
  // Comparison operators
  // > < <= >= == != 
  // <> is not equal to to 
  // === is identical 
  // !== is not identical to to
  
// Logical operators
// && AND
// and  low-precedence and 
//  || OR
// or low-precendce
// ! Not
// xor exclusive
// xor true true -> false\  false false -> false false \  false true -> true \  true  false -> true
$hour =3;
if($hour < 5 && $hour > 1) echo "Is too early";
$a = true;
$b = false;
echo $a xor $b; // true
$b = true;
echo $a xor $b; // false

$g = 0;
if( $g-- == 0) echo $g; // -1

?>