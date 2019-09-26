<?php
$bookno=$_POST['bookno'];
$title=$_POST['title'];
$author=$_POST['author'];
$price=$_POST['price'];
$sql="INSERT INTO book VALUES($bookno,'$title','$author',$price)";
//echo "$sql";
$cn=mysqli_connect("localhost","root","","library");
mysqli_query($cn,$sql);
mysqli_close($cn);
echo "Record Saved";
?>

