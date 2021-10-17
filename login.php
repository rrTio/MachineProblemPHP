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
</head>

<body>
    <center>
        <div class="container">
            <h4>Welcome!</h4>
            <p>Please enter your details</p>
            <form>
                <div class="row">
                    <div class="col-md-12 col-12-mobile">
                        <input type='text' id="sNumber" name="sNumber" placeholder="Student Number">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-12-mobile">
                        <input type="password" id="password" name="password" placeholder="Password">
                    </div>
                </div>

                <center>
                    <button type="submit" class="custom-btn btn-10 ">Sign in</button>
                </center>
            </form>
        </div>
        <a href="/forgot.html" target="_blank">
            Forgot password?
        </a>
        <center>
            <a href="registration.html" target="_blank">
                <button type="submit" class="custom-btn btn-10 btnLogin">Create new account</button>
            </a>
        </center>
    </center>
</body>

</html>