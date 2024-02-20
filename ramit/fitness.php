<?php
$steps=11000;
if($steps<5000){
$fitnesslevel ='beginner';
}elseif($steps >= 5000 && $steps <= 10000) {
$fitnesslevel ='intermediate';
}else{$fitnesslevel ='advanced';
}
echo"your fitness level is:" . $fitnesslevel;
?>