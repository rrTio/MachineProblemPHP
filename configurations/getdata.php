<?php
include_once('config.php');

if(isset($_POST['changeData'])){
    $cContact = $_POST['change_contactNumber'];
    $cEmail = $_POST['change_email'];
    $cYear = $_POST['change_yrLevel'];
    $cProgram = $_POST['change_program'];
    $cGender = $_POST['change_gender'];
    $getStudentNumber = $_POST['sendStudentNumber'];
    
    $change = "UPDATE student_info SET user_yearLevel = '$cYear', user_email = '$cEmail', user_program = '$cProgram', user_contact = '$cContact', user_gender = '$cGender' 
    WHERE user_studentNumber = '$getStudentNumber';";
    mysqli_query($conn, $change);
    header("Location: ../index.php");
}

?>