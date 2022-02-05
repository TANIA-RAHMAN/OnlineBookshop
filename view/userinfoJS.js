function showUser(str) {
    if (str=="") {
      document.getElementById("txtHint").innerHTML="field empty";
      return;
    }
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {
        document.getElementById("txtHint").innerHTML=this.responseText;
      }
    }
    xmlhttp.open("POST","getuserinfo.php",true);
    xmlhttp.send();
}