<?php
$memberid=$_POST['memberid'];
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$sql="INSERT INTO member VALUES($memberid,'$name','$email','$mobile')";
//echo "sql";
$cn=mysqli_connect("localhost","root","","library");
mysqli_query($cn,$sql);
mysqli_close($cn);
echo "Record Saved";
?>