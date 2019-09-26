<?php
$cn=mysqli_connect("localhost","root","","library");
$sql="SELECT * FROM member";
$result=mysqli_query($cn,$sql);
$count=mysqli_num_rows($result);

echo "Record found #$count";
echo "<table border='1' width='100%'><tr><th>Member ID</th><th>Name</th><th>Email</th><th>Mobile</th></tr>";

while($r=mysqli_fetch_array($result))
{
    echo "<tr><td>$r[0]</td><td>$r[1]</td><td>$r[2]</td><td>$r[3]</td></tr>";
}

echo "</table>";
mysqli_close($cn);
?>