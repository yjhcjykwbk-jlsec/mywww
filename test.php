<?php
$a = array('a','b'); 
$b = array('c', 'b'); 
$c = $a + $b; 
var_dump($c); 
var_dump(array_merge($a, $b)); 

$a = array(0 => 'a', 1 => 'b'); 
$b = array(0 => 'c', 1 => 'b'); 
$c = $a + $b; 
var_dump($c); 
var_dump(array_merge($a, $b)); 

// $a = array('a', 'b'); 
// $b = array('0' => 'c', 1 => 'b'); 
// $c = $a + $b; 
// var_dump($c); 
// var_dump(array_merge($a, $b)); 

// $a = array(0 => 'a', 1 => 'b'); 
// $b = array('0' => 'c', '1' => 'b'); 
// $c = $a + $b; 
// var_dump($c); 
// var_dump(array_merge($a, $b)); 
?>
