function validate() {
    var password = document.getElementById("password").value;
   
    
    
    if (password == "") {
      document.getElementById("mytext").innerHTML="Please enter password";
      return false;
    }
    
  }