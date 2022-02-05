<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function(){
      

    function validateForm() {
  var isValid;
  var x = document.forms["myForm"]["bookId"].value;
  var x1 = document.forms["myForm"]["bookName"].value;
  var x2 = document.forms["myForm"]["bookAuthor"].value;
  var x3 = document.forms["myForm"]["bookPublication"].value;
  var x4 = document.forms["myForm"]["bookGenre"].value;
  var x5 = document.forms["myForm"]["bookPrice"].value;
  var x6 = document.forms["myForm"]["bookPublished"].value;
  if (x == "" ) {
    
    document.getElementById("errorMsg").innerHTML = "<b>bookId must be filled out.</b>";
    document.getElementById("errorMsg").style.color = "red";
    isValid = false
  }
  else{
    document.getElementById("errorMsg").innerHTML = "";
  }
   if(x1 == "") {

    document.getElementById("errorMsg1").innerHTML = "<b>bookName must be filled out.</b>";
    document.getElementById("errorMsg1").style.color = "red";
    isValid = false
  }
  else{
    document.getElementById("errorMsg1").innerHTML = "";
  }
  if (x2 == "" ) {
    document.getElementById("errorMsg2").innerHTML = "<b>bookAuthor must be filled out.</b>";
    document.getElementById("errorMsg2").style.color = "red";
    isValid = false
  }
  else{
    document.getElementById("errorMsg2").innerHTML = "";
  }
  if (x3 == "" ) {
    document.getElementById("errorMsg3").innerHTML = "<b>bookPublication must be filled out.</b>";
    document.getElementById("errorMsg3").style.color = "red";
    isValid = false
  }
  else{
    document.getElementById("errorMsg3").innerHTML = "";
  }
  if (x4 == "" ) {
    document.getElementById("errorMsg4").innerHTML = "<b>bookGenre must be filled out.</b>";
    document.getElementById("errorMsg4").style.color = "red";
    isValid = false
  }
  else{
    document.getElementById("errorMsg4").innerHTML = "";
  }
  if (x5 == "" ) {
    document.getElementById("errorMsg5").innerHTML = "<b>bookPrice must be filled out.</b>";
    document.getElementById("errorMsg5").style.color = "red";
    isValid = false
  }
  else{
    document.getElementById("errorMsg5").innerHTML = "";
  }
  if (x6 == "" ) {
    document.getElementById("errorMsg6").innerHTML = "<b>bookPublished must be filled out.</b>";
    document.getElementById("errorMsg6").style.color = "red";
    isValid = false
  }
  

else {
          isValid = true;
        }
return isValid;
}

$('#submitFrom').click(function() 
{

    if(validateForm()){
        var x = document.forms["myForm"]["bookId"].value;
      var x1 = document.forms["myForm"]["bookName"].value;
      var x2 = document.forms["myForm"]["bookAuthor"].value;
      var x3 = document.forms["myForm"]["bookPublication"].value;
      var x4 = document.forms["myForm"]["bookGenre"].value;
      var x5 = document.forms["myForm"]["bookPrice"].value;
      var x6 = document.forms["myForm"]["bookPublished"].value;
      var x7 = document.forms["myForm"]["sellerName"].value;

var postData = 'bookId=' + x + '&bookName=' + x1 + '&bookAuthor=' + x2 + '&bookPublication=' + x3 + '&bookGenre=' + x4 + '&bookPrice=' + x5 + '&bookPublished=' + x6 + '&sellerName=' + x7;


    $.ajax({
          url: "../control/seller_adding_book.php",
          type: "POST",
          
          data: postData,
          success: function(data, status, xhr) {
          //if success then just output the text to the status div then clear the form inputs to prepare for new data
            $("#ajaxResult").html(data);
            // $('#name').val('');
            // $('#percentage').val('');
          },
          error: function(jqXHR, status, errorThrown) {
         
          //if fail show error and server status
            //$("#ajaxResult").html('there was an error ' + errorThrown + ' with status ' + textStatus);
          }
        })
  }
      
});





});

</script>
    <meta charset="UTF-8">
    <title>Seller - Home</title>
    <link rel="stylesheet" href="../css/navigation.css">
    <script src="https://kit.fontawesome.com/5a9a8e30c2.js" crossorigin="anonymous"></script>
    
    <style>
h1 {text-align: center;}

p {text-align: center;}
body {
  background-image: url('background/image4.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
}
</style>
</head>

<body>


<div class="wrapper">
    <div class="sidebar">
        <h2>Book Shop</h2>
        <ul>
            <li><a href="seller_home.php"><i class="fas fa-user"></i>Profile</a></li>
            <li><a href="seller_add_book.php"><<i class="fas fa-book"></i>Add Book</a></li>
            <li><a href="../databasecreation/orderinfos.php"><i class="fas fa-pause-circle"></i>Pending Request</a></li>
            <li><a href="bookinfo.php"><i class="fas fa-warehouse"></i></i>Show Inventory</a></li>
        </ul> 
        
    </div>
    <div class="main_content">
        <div class="header">Add Book</div>  

        <div class="info">
        
           <form onsubmit="return false" name="myForm">
            
            
                
             <legend><b>Book Registration</b></legend><br> <br><br> <br>
                
             <p id="mytext"></p>

                Book Id: <input type="text" id="bookId" name="bookId"> <p id="errorMsg"></p> <br> <br>
                Book Name: <input type="text" id="bookName" name="bookName"> <p id="errorMsg1"></p> <br> <br>
                Author: <input type="text" id="bookAuthor" name="bookAuthor"> <p id="errorMsg2"></p> <br> <br>
                Publication: <input type="text" id="bookPublication" name="bookPublication"> <p id="errorMsg3"></p> <br> <br>
                Genre: <select name="bookGenre" id="bookGenre">
				<option value="Biography" </option>
				<option value="Thriller">Thriller</option>
				<option value="Drama">Drama</option>
				<option value="Sci-Fiction">Sci-Fiction</option>
				<option value="Fantasy">Fantasy</option>
            
               </select> <p id="errorMsg4"></p> <br><br> 
               
                Book Price: <input type="number" id="bookPrice" name="bookPrice"> <p id="errorMsg5"></p> <br><br>
                Book Published: <input type="date" id="bookPublished" name="bookPublished"> <p id="errorMsg6"></p> <br><br>
                Seller Name: <input type="text" id="sellerName" name="sellerName" value=<?=$_SESSION["username"]?> > <br> <br>
                <input id="submitFrom" type="submit" name="add" value="Add Book">
                <input type="Reset"> <br> <br>
                <p id="ajaxResult"></p>
        <a href="../control/logout.php">logout</a>
            
           </form>
           <p id="errorMsg"></p>
        </div>
        
    </div>
</div>
</body>
</html>