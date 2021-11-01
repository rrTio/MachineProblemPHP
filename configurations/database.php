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

    if(isset($_POST['changeData'])){
        $cFirstName = $_POST['change_firstName'];    
        $cLastName = $_POST['change_lastName'];
        $cContact = $_POST['change_contactNumber'];
        $cEmail = $_POST['change_email'];
        $cYear = $_POST['change_yrLevel'];
        $cProgram = $_POST['change_program'];
        $getStudentNumber = $_POST['sendStudentNumber'];
        $change = "UPDATE student_info SET user_firstName = '$cFirstName', user_lastName = '$cLastName', user_yearLevel = '$cYear', user_email = '$cEmail', user_program = '$cProgram', user_contact = '$cContact'
        WHERE user_studentNumber = '$getStudentNumber';";
        mysqli_query($conn, $change);
        header("Location: ../index.php");
    }

    if(isset($_POST['deleteData'])){
        $cEmail = $_POST['change_email'];
        $getStudentNumber = $_POST['sendStudentNumber'];
        $delete = "DELETE FROM student_info WHERE user_email = '$cEmail' AND user_studentNumber = '$getStudentNumber';";
        mysqli_query($conn, $delete);
        header("Location: ../index.php");
    }

    if(isset($_POST['btnCPass'])){
        $userNumber = $_POST['fp_sNumber'];
        $userPass = $_POST['fp_password'];

        $changePass = "UPDATE student_info SET user_password = '$userPass' WHERE user_studentNumber = '$userNumber'";
        mysqli_query($conn, $changePass);
        header("Location: ../index.php");
    }
?>
