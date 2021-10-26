
function checkValidation() {

  var username = document.forms["loginForm"]["sNumber"];
  var password = document.forms["loginForm"]["password"];

  if (username.value == "" || password.value == "") {
    window.alert("Please enter valid username/password");
    username.focus();
    return false;
  }
  return true;
}

function errorVen() { 
  window.alert("INVALID USERNAME/PASSWORD");
}
