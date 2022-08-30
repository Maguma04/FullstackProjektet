function Väljdjur(str) {
  console.log(str)
    var xhttp;
    if (str.length == 0) { 
      document.getElementById("txtDjur").innerHTML = "";
      return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtDjur").innerHTML = this.responseText;
      }
    };
    console.log(str);
    xhttp.open("GET", "php.php?q="+str, true);
    xhttp.send();
  }