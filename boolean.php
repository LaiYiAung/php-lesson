<?php
$isComplete = (string)true; 

//integer 0 -0 = false
//float 0.0 -0..0 = false
// '' =false
// [] = false
// null = false

var_dump(is_bool($isComplete));
//echo $isComplete;

if ($isComplete){
    //echo 'success';
}else{
    //echo 'fail';
}


?>