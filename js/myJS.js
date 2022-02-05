

/* function validateForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (username == "") {
      document.getElementById("mytext").innerHTML="Please enter username";
      //return false;
    }
    if ( password.length < 3) {
      document.getElementById("mytext").innerHTML="Please enter password";
     // return false;
    }
  
    if (document.getElementById("admin").checked == false &&  document.getElementById("seller").checked == false  &&  document.getElementById("buyer").checked == false  &&  document.getElementById("dguy").checked == false)
    {
      document.getElementById("mytext").innerHTML="Please select any radio button";
      //return false;
    }
  } */
  $(document).ready(function(){
    $('form').submit(function(e){
        //console.log($("#username").val());
        var flag=true;
        $("#usernameErr").html('');
        $("#passwordErr").html('');
        $("#typeErr").html('');

        if($("#username").val()==""){
            $("#usernameErr").html('Username required');
            flag=false;
        }
        if($("#password").val()=="")
        {
            $("#passwordErr").html('password required');
            flag=false;
        }
        if(!($("#admin").is(':checked') || $("#buyer").is(':checked') || $("#seller").is(':checked')||$("#dguy").is(':checked')))
        {
            $("#typeErr").html('Must select user type');
            flag=false;
        }
        if(flag==false){
            e.preventDefault();
        }
    });
    
    
       
  });