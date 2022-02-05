function validation() {

    var firstname=document.myform.firstname).value;

    var username=document.myform.username.value;
    var password=document.myform.password.value;
    var cpassword=document.myform.cpassword.value;
    var address=document.myform.address.value;
    var phoneno=document.myform.phoneno.value;
    var nid=document.myform.nid.value;

  if (firstname == ""||firstname==null)
  {
    alert("Enter the name please!");
  }
  else if(username==""||username==null)
  {
    alert("Enter valid username please!");

  }
  else if (password =="" || password.length<6) {
        alert("Please enter at least 6 digit password");
    }
  else if (cpassword =="" || cpassword.length<6) {
        alert("Please enter at least 6 digit password");
    }
    else if (address == null || address == "") {
        alert("Enter the address please!");
        return false;
    }
    else if (phoneno== null || phoneno == "") {
        alert("Enter the phone number please!");
        return false;
    }
    else if (nid == null || nid == "") {
        alert("Enter the National id card number!");
        return false;
    }

// if(true)
// {
//   var button = document.getElementById('submitbtn');
//   button.form.submit();
// }
 
}