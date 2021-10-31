<?php
include_once('./configurations/config.php');

if(isset($_POST['changeData'])){
    $cContact = $_POST['change_contactNumber'];
    $cEmail = $_POST['change_email'];
    $cYear = $_POST['change_yrLevel'];
    $cProgram = $_POST['change_program'];
    $cGender = $_POST['change_gender'];
    $getStudentNumber = $_POST['sendStudentNumber'];
    echo $getStudentNumber;
    echo $cContact;
    $change = "UPDATE student_info SET user_yearLevel = '$cYear', user_email = '$cEmail', user_program = '$cProgram', user_contact = '$cContact', user_gender = '$cGender' 
    WHERE user_studentNumber = '$getStudentNumber';";
    mysqli_query($conn, $change);
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/login.css" />
    <script src='./assets/js/newlink.js'></script>
    <script src='./assets/js/validation.js'></script>
    </script>
</head>

<body>
    <center>
        <div class=" container">
            <h4>Welcome!</h4>
            <p>Please enter your details</p>
            <form onSubmit="return checkValidation()" action="landing.php" method="POST" name="loginForm">
                <div class="row">
                    <div class="col-md-12 col-12-mobile">
                        <input pattern="\d*" maxlength="11" id="sNumber" name="sNumber" placeholder="Student Number">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-12-mobile">
                        <input type="password" id="password" name="password" placeholder="Password">
                    </div>
                </div>
                <center>
                    <button name="btnLogin" type="submit" class="custom-btn btnLogin">Sign in</button>
                </center>
            </form>
        </div>
        <a id="forgotPassword" onClick="forgotPassword();"> Forgot password? </a>
        <center>
            <button type="submit" onClick='openlink();' class="custom-btn btn-10 btnCreate" id="newAccount">Create new account</button>
        </center>
    </center>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>