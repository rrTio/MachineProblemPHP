
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
  if (password != cPassword) { 
    window.alert("PASSWORD MISMATCH");
    return false;
  }
  return true
}

function errorVen() { 
  window.alert("INVALID USERNAME/PASSWORD");
}

function openlink() {
  window.location.href = "./registration.php";
}

function openFPassword() {
  window.location.href = "./forgotpassword.php";
}

function checkEMail() { 
  var regEmail = document.forms['regForm']['email'];
  var landEmail = document.forms['landingForm']['change_email'];
  if (!/@ue.edu.ph\s*$/.test(regEmail) || !/@ue.edu.ph\s*$/.test(landEmail)) {
    window.alert("EMAIL DOMAIN SHOULD BE '@UE.EDU.PH'!");
    return false;
  }
  return true
}
