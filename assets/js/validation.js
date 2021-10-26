
function checkValidation() {
  alert("HELLO");

  var username = document.forms["loginForm"]["sNumber"];
  var password = document.forms["loginForm"]["password"];

  if (username.value == "") {
    window.alert("Please enter valid username");
    username.focus();
    return false;
  }

  if (password.value == "") {
    window.alert("Please enter valid password");
    password.focus();
    return false;
  }
  return true;
}
