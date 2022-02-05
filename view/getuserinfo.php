<!DOCTYPE html>
<html>
<body>
<?php
include('../control/db.php');
include('updateuserinfo.php';)
$q = $_POST['searchName'];
$connection = new db();
$con=$connection->OpenCon();

$sql="SELECT * FROM users WHERE username='".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Firstname</th>
<th>Email</th>
<th>Address</th>
<th>Phone no</th>
<th>National id</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['firstname'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "<td>" . $row['phoneno'] . "</td>";
  echo "<td>" . $row['nid'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>

</body>
</html>