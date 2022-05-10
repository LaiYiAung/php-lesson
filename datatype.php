<?php
#data type & type casting
declare(strict_types=1);
#4 scalar types
    
#bool
 $complete = true;
#int
$score = 100;
#float
$price = 0.99;
#string
 $greeting = 'hello Lai';

 echo $complete. '<br/>';
 echo $score.'<br/>';
 echo $price.'<br/>';
 echo $greeting.'<br/>';

 // gettype() vs var_dump()
 echo gettype($complete);
 echo '<br/>';
var_dump($complete);
echo '<br/>';
 // 4 compound types
 //array
  //object
  //callable
  //itrerable

function sum(float $x, float $y){
    var_dump($x, $y);
    echo'<br/>';
    return $x + $y;
}
$sum = sum(2, 3);

echo $sum;

echo '<br/>';

var_dump($sum);

// data type,data juggling,data casting(int),strict_types
?>