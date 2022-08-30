<?php

//$q = intval($_GET['q']);
$q = ($_GET['q']);
$sign = "%";

$servername = "localhost:8222";
$username = "root";
$password = "";
$dbname = "djurprojekt";

$con = mysqli_connect($servername,$username,$password,$dbname);
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"djur");
//$sql="SELECT * FROM users WHERE id = '".$q."' WHERE uidUsers LIKE '"%" + ".$q."'"
//$sql="SELECT uidUsers, emailUsers FROM users";
$sql="SELECT DjurNR, Fakta1, Fakta2 FROM djur WHERE DjurNR LIKE '".$q.$sign."'";
echo $sql;
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Namn</th>
<th>Fakta 1</th>
<th>Fakta 2</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['DjurNR'] . "</td>";
  echo "<td>" . $row['Fakta1'] . "</td>";
  echo "<td>" . $row['Fakta2'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);

?>