
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

function forgotPassword() { 
  var password = document.forms["formFPass"]["fp_password"];
  var cPassword = document.forms["formFPass"]["fp_confirmPassword"];
  if (password.value != cPassword.value) { 
    window.alert("PASSWORD MISMATCH");
    return false;
  }
  return true;
}

function errorVen() { 
  window.alert("INVALID USERNAME/PASSWORD");
}
