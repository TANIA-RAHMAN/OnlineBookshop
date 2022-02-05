<?php
include('../control/db.php');
session_start(); 
include ("../model/setconn.php");
if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

if(isset($_GET["uname"]))
{
  
  $sql="delete from users where username='".$_GET['uname']."' ";
  
  
  //echo $sql;
  execute($sql);
  header("location:trash.php");

}

?>

<!DOCTYPE html>
<html>
<head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');
h1 {text-align: center;}
h2 {text-align: center;}
h3 {text-align: center;}

p {text-align: center;}
body {
  font-family: 'Lato', sans-serif;
  background-image: url('background/image2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
}
a:link, a:visited {
  background-color:  rgb(99, 43, 4);
  color:  white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: green;
}
</style>
</head>
<body>
<h2>Deleted User's Information Page</h2>

<h3>Hii, <?php echo $_SESSION["username"];?></h3>
<br/>Deleted user's information: 
<?php
$sql = "select * FROM users where deleted_by is not NULL and type!='admin'  ";
//echo $sql;
$userQuery=execute($sql);

//$connection = new db();
//$conobj=$connection->OpenCon();

//$userQuery=$connection->ShowAll($conobj,"users");

if ($userQuery->num_rows > 0) {
    echo "<table><tr><th>First Name</th><th>Email</th><th>Address</th><th>Phone No</th><th>NID</th><th>Type</th><th>DOB</th><th>Action</th>";
    // output data of each rowth
    while($row = $userQuery->fetch_assoc()) {
      echo "<tr><td>".$row["firstname"]."</td><td>".$row["email"]."</td><td>"
      .$row["address"]."</td><td>".$row["phoneno"]."</td><td>".$row["nid"]."</td><td>".$row["type"]."</td><td>".$row["dob"].
      "</td><td><a href=".'trash.php?uname='.$row["username"].">Permanantly delete</a></td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }

?>

<br/>
<br/>
<br/>
<a href="adminhome.php">Admin Home Page</a>
<br/>
<a href="../control/logout.php">logout</a>

</body>
</html>