<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/registration.css" />
    <script src="./assets/js/validation.js"></script>
</head>

<body>
    <div class="containerCard">
        <div class="card">
            <h3>SIGN UP</h3>
            <p style="text-align: center">It's quick and easy</p>
            <div class="container mt-3">
                <form  name="regForm" action="./configurations/database.php" onsubmit="return checkEmail()" method="POST">
                    <div class="row">
                        <div class="col-md-6 col-12-mobile">
                            <input type="text" id="fName" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" name="firstName" placeholder="First Name" required>
                        </div>
                        <div class="col-md-6 col-12-mobile">
                            <input type="text" id="lName" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" name="lastName" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12-mobile">
                            <input type="number" pattern="/^-?\d+\.?\d*$/" class="contactNumber" onKeyPress="if(this.value.length==11) return false;" id="sNumber" name="sNumber" placeholder="Student Number" required>
                        </div>
                        <div class="col-md-6 col-12-mobile">
                            <input type="number" pattern="/^-?\d+\.?\d*$/" class="contactNumber" onKeyPress="if(this.value.length==11) return false;" id="contactNumber" name="contactNumber" placeholder="Contact Number" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-12-mobile">
                            <input type="email" id="email" name="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12-mobile">
                            <select class="yrLevel" id="yrLevel" name="yrLevel" required>
                                <option selected disabled>YEAR LEVEL</option>
                                <option value="1st Year">1st YEAR</option>
                                <option value="2nd Year">2nd YEAR</option>
                                <option value="3rd Year">3rd YEAR</option>
                                <option value="4th Year">4th YEAR</option>
                                <option value="5th Year">5th YEAR</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-12-mobile">
                            <select class="program" id="program" name="program" required>
                                <option selected disabled>PROGRAM</option>
                                <option value="BSEE">Bachelor of Science in Electrical Engineering</option>
                                <option value="BSCPE">Bachelor of Science in Computer Engineering</option>
                                <option value="BSME">Bachelor of Science in Mechanical Engineering</option>
                                <option value="BSIT">Bachelor of Science in Information Technology</option>
                                <option value="BSCS">Bachelor of Science in Computer Science</option>
                                <option value="BSIS">Bachelor of Science in Information System</option>
                                <option value="BSEMC">Bachelor of Science in Entertainment and Multimedia Computing</option>
                                <option value="BSDS">Bachelor of Science in Data Science</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center g-3">
                        <div class="birthdate col-lg-6 col-12-mobile">
                            <h4 id="birthdate">Birthdate: &nbsp;</h4>
                            <select id="month" name="month" required>
                                <option selected disabled>MONTH</option>
                                <option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                            <select id="day" name="day" required>
                                <option selected disabled>DAY</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                            <select id="year" name="year" required>
                                <option selected disabled>YEAR</option>
                                <option value="1980">1980</option>
                                <option value="1981">1981</option>
                                <option value="1982">1982</option>
                                <option value="1983">1983</option>
                                <option value="1984">1984</option>
                                <option value="1985">1985</option>
                                <option value="1986">1986</option>
                                <option value="1987">1987</option>
                                <option value="1988">1988</option>
                                <option value="1989">1989</option>
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                            </select>
                        </div>
                        <div class="gender col-lg-6 col-md-auto col-12-mobile">
                            <select id="gender" name="gender" required>
                                <option selected disabled>GENDER</option>
                                <option value="Male">MALE</option>
                                <option value="Female">FEMALE</option>
                                <option value="Unavailable">PREFER NOT TO SAY</option>
                            </select>
                        </div>
                    </div>
                    <center>
                        <div class="col-12-mobile buttonRegister">
                            <button type="submit" name="register" class=" custom-btn btn-10">Register</button>
                        </div>
                    </center>
                </form>
            </div>
        </div>
    </div>
</body>

</html>