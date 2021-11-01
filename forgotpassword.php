<!DOCTYPE html>
<html>
    <head>
        <title>Forgot Password</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/forgotPassword.css" />
        <script src='assets/js/newlink.js'></script>
        <script src='assets/js/validation.js'></script>
    </head>
    <body>
        <center>
            <div class="container">
                <h4>Forgot your password?</h4>
                <p>You can change it here</p>
                <form name="formFPass" action="./configurations/database.php" method="POST" onsubmit="return forgotPassword()">
                    <div class="row">
                        <div class="col-md-12 col-12-mobile">
                            <input pattern="\d*" maxlength="11" id="fp_sNumber" name="fp_sNumber" placeholder="Student Number" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-12-mobile">
                            <input type="password" id="fp_password" name="fp_password" placeholder="Password" required>
                        </div>
                        <div class="col-md-12 col-12-mobile">
                            <input type="password" id="fp_confirmPassword" name="fp_confirmPassword"
                                placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <center>
                        <button type="submit" id="checkPass" name="btnCPass" class="custom-btn btnChange">Change Password</button>
                    </center>
                </form>
            </div>
            <center>
                <button type="submit" onClick='openlink()' class="custom-btn btn-10 btnCreate" id="newAccount">Create New Account</button>
            </center>
        </center>
    </body>
</html>