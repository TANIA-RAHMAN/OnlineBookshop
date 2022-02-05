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
  
  $sql="update users set deleted_by='".$_SESSION['username']."' where username='".$_GET['uname']."' ";
  //echo $sql;
  execute($sql);
  header("location:alluserinfo.php");
 
}

if(isset($_GET["uname"]))
{
  
  /* $sql="delete from users where username='".$_GET['uname']."' "; */
  function dd()
  {
    echo "<pre>", print_r($value, true), "</pre>";
    die();
  } 
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

.profile-container {
  border: 1px solid #CCC;
  width: 100%;
  display: flex;
  justify-content: space-evenly;
  flex-wrap: wrap;
}

.profile-wraper {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  width: max-content;
  display: flex;
  flex-direction: column;
  align-items: center;
  background-color: #FFF;
  padding: 4px;
  margin: 16px 0  16px 0;
}
.profile-wraper > span {
  color: #444;
  font-size: 13px;
  display: block;
}

.thumb-img {
  width: 128px;
  height: 128px;
  border-radius: 50%;
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
<h2>All User Information Page</h2>

<h3>Hii, <?php echo $_SESSION["username"];?></h3>
<br/>All user information: 
<?php
$sql = "select * FROM users where deleted_by is  NULL and type!='admin'  ";
//echo $sql;
$userQuery=execute($sql);

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowAll($conobj,"users");

?>
<div class="profile-container">

<?php
      if ($userQuery->num_rows > 0) {
          while($row = $userQuery->fetch_assoc()) {
    ?>

  <div class="profile-wraper">
    <img class='thumb-img' src='<?php echo $row["imageg"]; ?>' alt=''>
    <table style="display:border-box,text-decoration:bold">

            
      <tr>
        <td>Name:</td>
        <td><?php echo $row["firstname"]; ?></td>
      </tr>

      <tr>
        <td>Email:</td>
        <td style="width: 100px; word-wrap: wrap;"><?php echo $row["email"]; ?></td>
      </tr>

      <tr>
        <td>UserName:</td>
        <td><?php echo $row["username"]; ?></td>
      </tr>

      <tr>
        <td>Address:</td>
        <td><?php echo $row["address"]; ?></td>
      </tr>

      <tr>
        <td>PhoneNo:</td>
        <td><?php echo $row["phoneno"]; ?></td>
      </tr>

      <tr>
        <td>NID:</td>
        <td><?php echo $row["nid"]; ?></td>
      </tr>

      <tr>
        <td>Gender:</td>
        <td><?php echo $row["gender"]; ?></td>
      </tr>

      <tr>
        <td>Type:</td>
        <td><?php echo $row["type"]; ?></td>
      </tr>

      <tr>
        <td>DOB:</td>
        <td><?php echo $row["dob"]; ?></td>
      </tr>

      <tr>
            <!-- <td><a href="userpage.php">Update</a></a></td> -->
            <td><a href="alluserinfo.php?uname=<?php echo  $row["username"];?>">delete</a></td>
      </tr>
        



    </table>
  </div>

  <?php }
          echo "</table>";
        } else {
          echo "0 results";
        }
        ?>

</div>

<br/>
<br/>
<br/>
<center>
<a href="adminhome.php">Admin Home Page</a>
<!-- <br/>
<br/>
<a href="updateuserinfo.php">Update User Info</a> -->
<br/>
<br/>
<td><a href="userpage.php">Update User Info</a></a></td>
<br/>
<br/>
<a href="../control/logout.php">logout</a>
</center>
</body>
</html>