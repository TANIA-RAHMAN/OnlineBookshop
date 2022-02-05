function validateForm() {
    var bookId = document.getElementById("bookId").value;
    var bookName = document.getElementById("bookName").value;
    var bookAuthor = document.getElementById("bookAuthor").value;
    var bookPublication = document.getElementById("bookPublication").value;
    var bookGenre = document.getElementById("bookGenre").value;
    var bookPrice = document.getElementById("bookPrice").value;
    var bookPublished = document.getElementById("bookPublished").value;
    
    
    
    if (bookId == "") {
      document.getElementById("mytext").innerHTML="Please enter book Id";
      return false;
    }
    if (bookName == "") {
        document.getElementById("mytext").innerHTML="Please enter book name";
        return false;
      }
    if (bookAuthor == "") {
        document.getElementById("mytext").innerHTML="Please enter author ame";
        return false;
      }
    if (bookPublication == "") {
        document.getElementById("mytext").innerHTML="Please enter book publication name";
        return false;
      }
    if (bookGenre == "") {
        document.getElementById("mytext").innerHTML="Please enter book genre";
        return false;
      }
      if (bookPrice == "") {
        document.getElementById("mytext").innerHTML="Please enter book price";
        return false;
      }
      if (bookPublished == "") {
        document.getElementById("mytext").innerHTML="Please enter book published date";
        return false;
      }
  }
    
    
}