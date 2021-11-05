<?php 
    include_once('./configurations/config.php');
    session_start();
    $firstName = $_SESSION['firstName'];
    $lastName = $_SESSION['lastName'];
    $studentNumber = $_SESSION['studentNumber'];
    $phoneNumber = $_SESSION['phoneNumber'];
    $yearLevel = $_SESSION['yearLevel'];
    $email = $_SESSION['email'];
    $program = $_SESSION['program'];
    $month = $_SESSION['month'];
    $day = $_SESSION['day'];
    $year = $_SESSION['year'];
    $gender = $_SESSION['gender'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Profile</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/landing.css" />
    <script src='./assets/js/validation.js'></script>
</head>

<body>
    <div class="containerCard">
        <div class="card">
            <h3>Welcome <?php echo $firstName?>!</h3>
            <p style="text-align: center">This is your profile and you may edit it</p>
            <div class="container mt-3">
                <form name="landingForm" onsubmit="return checkEMail()" action="./configurations/database.php" method="POST">
                    <div class="row">
                        <div class="col-md-6 col-12-mobile">
                            <input readonly="true" type="text" id="fName" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" name="change_firstName" placeholder="First Name" value='<?php echo $firstName?>'>
                        </div>
                        <div class="col-md-6 col-12-mobile">
                            <input readonly="true" type="text" id="lName" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" name="change_lastName"
                                placeholder="Last Name" value='<?php echo $lastName;?>'>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12-mobile">
                            <input readonly="true" type="number" pattern="/^-?\d+\.?\d*$/" class="studentNumber" onKeyPress="if(this.value.length==11) return false;"  value='<?php echo $studentNumber;?>'
                                id="sNumber" name="sendStudentNumber" placeholder="Student Number">
                        </div>
                        <div class="col-md-6 col-12-mobile">
                            <input type="number" pattern="/^-?\d+\.?\d*$/" class="contactNumber" onKeyPress="if(this.value.length==11) return false;" 
                                id="contactNumber" name="change_contactNumber" placeholder="Contact Number" value='<?php echo $phoneNumber;?>'>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-12-mobile">
                            <input type="email" id="email" name="change_email" placeholder="Email" value='<?php echo $email;?>'>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12-mobile">
                            <select class="yrLevel" id="yrLevel" name="change_yrLevel">
                                <option value="1st Year" <?php echo ($yearLevel=='1st Year')?('selected'):(''); ?>>1st Year</option>
                                <option value="2nd Year" <?php echo ($yearLevel=='2nd Year')?('selected'):(''); ?>>2nd Year</option>
                                <option value="3rd Year" <?php echo ($yearLevel=='3rd Year')?('selected'):(''); ?>>3rd Year</option>
                                <option value="4th Year" <?php echo ($yearLevel=='4th Year')?('selected'):(''); ?>>4th Year</option>
                                <option value="5th Year" <?php echo ($yearLevel=='5th Year')?('selected'):(''); ?>>5th Year</option>
                            </select><br/>
                        </div>
                        <div class="col-md-6 col-12-mobile">
                            <select class="program" id="program" name="change_program">
                                <option selected disabled>PROGRAM</option>
                                <option value="BSEE"<?php echo ($program=='BSEE')?('selected'):(''); ?>>Bachelor of Science in Electrical Engineering</option>
                                <option value="BSCPE"<?php echo ($program=='BSCPE')?('selected'):(''); ?>>Bachelor of Science in Computer Engineering</option>
                                <option value="BSME"<?php echo ($program=='BSME')?('selected'):(''); ?>>Bachelor of Science in Mechanical Engineering</option>
                                <option value="BSIT"<?php echo ($program=='BSIT')?('selected'):(''); ?>>Bachelor of Science in Information Technology</option>
                                <option value="BSCS"<?php echo ($program=='BSCS')?('selected'):(''); ?>>Bachelor of Science in Computer Science</option>
                                <option value="BSIS"<?php echo ($program=='BSIS')?('selected'):(''); ?>>Bachelor of Science in Information System</option>
                                <option value="BSEMC"<?php echo ($program=='BSEMC')?('selected'):(''); ?>>Bachelor of Science in Entertainment and Multimedia Computing</option>
                                <option value="BSDS"<?php echo ($program=='BSDS')?('selected'):(''); ?>>Bachelor of Science in Data Science</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center g-3">
                        <div class="birthdate col-lg-6 col-12-mobile">
                            <h4 id="birthdate">Birthdate: &nbsp;</h4>
                            <select id="month" name="month" readonly="true">
                                <option selected disabled>MONTH</option>
                                <option value="01" <?php echo ($month=='01')?('selected'):(''); ?>>January</option>
                                <option value="02" <?php echo ($month=='02')?('selected'):(''); ?>>February</option>
                                <option value="03" <?php echo ($month=='03')?('selected'):(''); ?>>March</option>
                                <option value="04" <?php echo ($month=='04')?('selected'):(''); ?>>April</option>
                                <option value="05" <?php echo ($month=='05')?('selected'):(''); ?>>May</option>
                                <option value="06" <?php echo ($month=='06')?('selected'):(''); ?>>June</option>
                                <option value="07" <?php echo ($month=='07')?('selected'):(''); ?>>July</option>
                                <option value="08" <?php echo ($month=='08')?('selected'):(''); ?>>August</option>
                                <option value="09" <?php echo ($month=='09')?('selected'):(''); ?>>September</option>
                                <option value="10" <?php echo ($month=='10')?('selected'):(''); ?>>October</option>
                                <option value="11" <?php echo ($month=='11')?('selected'):(''); ?>>November</option>
                                <option value="12" <?php echo ($month=='12')?('selected'):(''); ?>>December</option>
                            </select>
                            <select id="day" name="day" readonly="true">
                                <option selected disabled>DAY</option>
                                <option value="01" <?php echo ($day=='01')?('selected'):(''); ?>>01</option>
                                <option value="02" <?php echo ($day=='02')?('selected'):(''); ?>>02</option>
                                <option value="03" <?php echo ($day=='03')?('selected'):(''); ?>>03</option>
                                <option value="04" <?php echo ($day=='04')?('selected'):(''); ?>>04</option>
                                <option value="05" <?php echo ($day=='05')?('selected'):(''); ?>>05</option>
                                <option value="06" <?php echo ($day=='06')?('selected'):(''); ?>>06</option>
                                <option value="07" <?php echo ($day=='07')?('selected'):(''); ?>>07</option>
                                <option value="08" <?php echo ($day=='08')?('selected'):(''); ?>>08</option>
                                <option value="09" <?php echo ($day=='09')?('selected'):(''); ?>>09</option>
                                <option value="10" <?php echo ($day=='10')?('selected'):(''); ?>>10</option>
                                <option value="11" <?php echo ($day=='11')?('selected'):(''); ?>>11</option>
                                <option value="12" <?php echo ($day=='12')?('selected'):(''); ?>>12</option>
                                <option value="13" <?php echo ($day=='13')?('selected'):(''); ?>>13</option>
                                <option value="14" <?php echo ($day=='14')?('selected'):(''); ?>>14</option>
                                <option value="15" <?php echo ($day=='15')?('selected'):(''); ?>>15</option>
                                <option value="16" <?php echo ($day=='16')?('selected'):(''); ?>>16</option>
                                <option value="17" <?php echo ($day=='17')?('selected'):(''); ?>>17</option>
                                <option value="18" <?php echo ($day=='18')?('selected'):(''); ?>>18</option>
                                <option value="19" <?php echo ($day=='19')?('selected'):(''); ?>>19</option>
                                <option value="20" <?php echo ($day=='20')?('selected'):(''); ?>>20</option>
                                <option value="21" <?php echo ($day=='21')?('selected'):(''); ?>>21</option>
                                <option value="22" <?php echo ($day=='22')?('selected'):(''); ?>>22</option>
                                <option value="23" <?php echo ($day=='23')?('selected'):(''); ?>>23</option>
                                <option value="24" <?php echo ($day=='24')?('selected'):(''); ?>>24</option>
                                <option value="25" <?php echo ($day=='25')?('selected'):(''); ?>>25</option>
                                <option value="26" <?php echo ($day=='26')?('selected'):(''); ?>>26</option>
                                <option value="27" <?php echo ($day=='27')?('selected'):(''); ?>>27</option>
                                <option value="28" <?php echo ($day=='28')?('selected'):(''); ?>>28</option>
                                <option value="29" <?php echo ($day=='29')?('selected'):(''); ?>>29</option>
                                <option value="30" <?php echo ($day=='30')?('selected'):(''); ?>>30</option>
                                <option value="31" <?php echo ($day=='31')?('selected'):(''); ?>>31</option>
                            </select>
                            <select id="year" name="year" readonly="true">
                                <option selected disabled>YEAR</option>
                                <option value="1980" <?php echo ($year=='1980')?('selected'):(''); ?>>1980</option>
                                <option value="1981" <?php echo ($year=='1981')?('selected'):(''); ?>>1981</option>
                                <option value="1982" <?php echo ($year=='1982')?('selected'):(''); ?>>1982</option>
                                <option value="1983" <?php echo ($year=='1983')?('selected'):(''); ?>>1983</option>
                                <option value="1984" <?php echo ($year=='1984')?('selected'):(''); ?>>1984</option>
                                <option value="1985" <?php echo ($year=='1985')?('selected'):(''); ?>>1985</option>
                                <option value="1986" <?php echo ($year=='1986')?('selected'):(''); ?>>1986</option>
                                <option value="1987" <?php echo ($year=='1987')?('selected'):(''); ?>>1987</option>
                                <option value="1988" <?php echo ($year=='1988')?('selected'):(''); ?>>1988</option>
                                <option value="1989" <?php echo ($year=='1989')?('selected'):(''); ?>>1989</option>
                                <option value="1990" <?php echo ($year=='1990')?('selected'):(''); ?>>1990</option>
                                <option value="1991" <?php echo ($year=='1991')?('selected'):(''); ?>>1991</option>
                                <option value="1992" <?php echo ($year=='1992')?('selected'):(''); ?>>1992</option>
                                <option value="1993" <?php echo ($year=='1993')?('selected'):(''); ?>>1993</option>
                                <option value="1994" <?php echo ($year=='1994')?('selected'):(''); ?>>1994</option>
                                <option value="1995" <?php echo ($year=='1995')?('selected'):(''); ?>>1995</option>
                                <option value="1996" <?php echo ($year=='1996')?('selected'):(''); ?>>1996</option>
                                <option value="1997" <?php echo ($year=='1997')?('selected'):(''); ?>>1997</option>
                                <option value="1998" <?php echo ($year=='1998')?('selected'):(''); ?>>1998</option>
                                <option value="1999" <?php echo ($year=='1999')?('selected'):(''); ?>>1999</option>
                                <option value="2000" <?php echo ($year=='2000')?('selected'):(''); ?>>2000</option>
                                <option value="2001" <?php echo ($year=='2001')?('selected'):(''); ?>>2001</option>
                                <option value="2002" <?php echo ($year=='2002')?('selected'):(''); ?>>2002</option>
                                <option value="2003" <?php echo ($year=='2003')?('selected'):(''); ?>>2003</option>
                            </select>
                        </div>
                        <div class="gender col-lg-6 col-md-auto col-12-mobile">
                            <select id="gender" name="change_gender">
                                <option selected disabled>GENDER</option>
                                <option value="Male" <?php echo ($gender=='Male')?('selected'):(''); ?>>MALE</option>
                                <option value="Female" <?php echo ($gender=='Female')?('selected'):(''); ?>>FEMALE</option>
                                <option value="Unavailable" <?php echo ($gender=='Unavailable')?('selected'):(''); ?>>PREFER NOT TO SAY</option>
                            </select>
                        </div>
                    </div>

                    <center>
                        <div class="row">
                            <div class="col-md-6 col-12-mobile buttonRegister">
                                <button type="submit" name="changeData" class="custom-btn btn-10">Save Changes</button>
                            </div>
                            <div class="col-md-6 col-12-mobile buttonRegister"> 
                                <button type="submit" name="deleteData" class="custom-btn btnDelete">Delete Account</button>
                            </div>
                        </div>
                    </center>
                </form>
            </div>
        </div>
    </div>
</body>
</html>