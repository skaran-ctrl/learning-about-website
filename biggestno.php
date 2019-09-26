<?php
$x=$_POST['num1'];
$y=$_POST['num2'];
$z=$_POST['num3'];
if($x>$y && $x>$z)
{
echo "number=$x";}
else if($y>$z){
echo "number=$y";}
else{
echo "number=$z";}
?>