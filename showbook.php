<?php
$cn=mysqli_connect("localhost","root","","library");
$sql="SELECT * FROM BOOK";
$result=mysqli_query($cn,$sql);
$count=mysqli_num_rows($result);
echo "record found #$count";
echo "<table border='1' width='100%'><tr><th>bookno</th><th>title</th><th>author</th><th>price</th></tr>";
while($r=mysqli_fetch_array($result))
{
    echo"<tr><td>$r[0]</td><td>$r[1]</td><td>$r[2]</td><td>$r[3]</td></tr>";
}
echo "</table>";
mysqli_close($cn);
?>