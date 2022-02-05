<?php
session_start(); 
include('../control/db.php');
include('../control/updateusercheck.php');

if(empty($_SESSION["username"])) // Destroying All Sessions
{
  header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/dcss.css">
</head>
<head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');
h1 {text-align: center;}
h2 {text-align: center;}
h3 {text-align: center;}

p {text-align: center;}
body {
  font-family: 'Lato', sans-serif;
  background-image: url('background/image3.jpg');
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
<body>
<div>
<h1>Update Profile Information</h1>
</div>
<div>
<tr><th><a href="buyerhome.php">Buyer Home Page</a></th>
<tr><th><a href="../control/logout.php">logout</a></th></div>
<h3>Hii, <?php echo $_SESSION["username"];?></h3>

<?php
if(isset($_COOKIE["updatedAt"]))
{
  echo "Last Updated at ".$_COOKIE["updatedAt"];
}
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"users",$_SESSION["username"],$_SESSION["password"],$_SESSION["type"]);

if ($userQuery->num_rows > 0) {
  echo "<form action='' method='post'>";
      while($row = $userQuery->fetch_assoc()) {
        
        echo "<tr><tr><tr><th>firstname : <input type='text' name='firstname' value=".$row["firstname"]." > <br><hr>";
        echo "Email : <input type='text' name='email' value=".$row["email"]." ><br><hr>";
        echo "Address : <input type='text' name='address' value=".$row["address"]." ><br><hr>";
        echo "Phone NO : <input type='text' name='phoneno' value=".$row["phoneno"]." ><br><hr>";
        echo "National ID NO: <input type='text' name='nid' value=".$row["nid"]." ><br><hr>";
        echo "Date Of Birth : <input type='text' name='dob' value=".$row["dob"]." ><br><hr>";
      
    }
    echo   "<input name='update' type='submit' value='Update'>";
    echo "</table>";
  } else {
    echo "0 results";
  }



?>
</body>
</html>