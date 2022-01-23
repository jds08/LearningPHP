<?php // test1.php
// variable assignment

// Strings
$mycounter = 1;
$mystring = "Hello";
$myarray = array("One", "two", "three");
$username = "John Smith";
echo $username;
$current_user = $username;
echo $current_user;
// php doesn't follow indentation rules such as Python

// int and float-point values
$count = 13;
$count1 = 12.4;
echo $count;
echo $count1;

// arrays 
$team = array('Jason', 'Eric', 'Rodrigez', "Raul");
echo $team[0];
echo $team[1];
echo $team[2];
echo $team[3];
//echo $team[4]; // out of bounds
//echo $team[5]; // out of bounds

// two dimensional arrays
$oxo = array(array('O', 'O', 'X'),
             array('X', 'O', 'X'),
             array('O', 'X', 'X'));
echo $oxo[0][1];

/*
 * Variable name rules
 * $A_Zora_bthen0_9
 * variable names should not contain spaces 
 * case sensitive
 * 
 */  




?>
    
 