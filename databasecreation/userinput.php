<?php
session_start();
$values=true;
$firstname=$email=$username=$password=$cpassword=$address=$phoneno=$nid=$gender=$type=$dob=$image="";
$nameerror=$emailerror=$usernameerror=$passworderror=$cpassworderror=$addresserror=$phonenoerror=$niderror=
$gendererror=$typeerror=$doberror=$imageerror="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $firstname=$_POST["firstname"];
  $email=$_POST["email"];
  $username=$_POST["username"];
  $password=$_POST["password"];
  $cpassword=$_POST["cpassword"];
  $address=$_POST["address"];
  $phoneno=$_POST["phoneno"];
  $nid=$_POST["nid"];
  $gender=$_POST["gender"];
  $type=$_POST["type"];
  $dob=$_POST["dob"];
  $image=$_FILES["image"];
  if($password!= $cpassword)
  {
      $values=false;
      $passworderror="Password mismatch";
      $_SESSION["wrong"]="wrong password";
      header ("location: ../RegistrationForm.php");
  }
   
    $target_dir = "../view/uploads/";
$filename=basename($_FILES["image"]["name"]);
$target_file = $target_dir . basename($_FILES["image"]["name"]);



	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file) && $values=true) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    } else {
      $values=false;
        $fileerror= "Sorry, there was an error uploading your file.";
    }
    


}
$conn = new mysqli("localhost", "root", "", "bookshop");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO Users (firstname,email,username,password,address,phoneno,nid,gender,type,dob,imageg)
VALUES ('$firstname','$email','$username','$password','$address','$phoneno','$nid','$gender','$type','$dob','$target_file')";
echo $sql;
$res = $conn->query($sql);//execute query
if($res)
{ echo "Registration Successful!"; }
else
{ echo "Try Again"; }
$conn->close();
header ("location: ../view/login.php");
?>



