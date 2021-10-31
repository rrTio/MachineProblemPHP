<?php
    include_once('config.php');
        
    if(isset($_POST['register'])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $studentNumber = $_POST['sNumber'];
        $yrLevel = $_POST['yrLevel'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $program = $_POST['program'];
        $contactNumber = $_POST['contactNumber'];
        $month = $_POST['month'];
        $day = $_POST['day'];
        $year = $_POST['year'];
        $gender = $_POST['gender'];
        
        if($password == ""){
            $surname = strtolower($lastName);
            $newPassword = $month.$day.$year.$surname;
            $password = $newPassword;
        }
        
        $sql = "INSERT INTO student_info (user_firstName, user_lastName, user_studentNumber, user_yearLevel, user_email, user_password, user_program, 
        user_contact, user_birthMonth, user_birthDay, user_birthYear, user_gender) 
        VALUES ('$firstName','$lastName','$studentNumber','$yrLevel','$email','$password','$program','$contactNumber','$month','$day','$year','$gender');";
        mysqli_query($conn, $sql);
        header("Location: ../index.php");
    }
?>
