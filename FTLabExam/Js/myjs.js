function AjaxFunction() {
  var fname = document.getElementById("name").value;
  var ri = document.getElementById("research").value;
  var designation = document.getElementById("designation").value;

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("message").innerHTML = this.responseText;
    } 
    else 
    {
      document.getElementById("message").innerHTML = this.status;
    }
  };

  
  xhttp.open(
    "POST",
    "/FTLabExam/Control/searchcontrol.php?name=" +
      fname +
      "&research=" +
      research +
      "&designation=" +
      designation,
    true
  );

  xhttp.send();
}
