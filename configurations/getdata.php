<?php 

    include_once('../configurations/config.php');
    include('../configurations/checklogin.php');

    $getFirstName = mysqli_query($conn, "SELECT user_firstName FROM student_info");
    $getLastName = mysqli_query($conn, "SELECT user_lastName FROM student_info");
    $getStudentNumber = mysqli_query($conn, "SELECT user_studentNumber FROM student_info");
    $getYearLevel = mysqli_query($conn, "SELECT user_yearLevel FROM student_info");
    $getEmail = mysqli_query($conn, "SELECT user_email FROM student_info");
    $getProgram = mysqli_query($conn, "SELECT user_program FROM student_info");
    $getContact = mysqli_query($conn, "SELECT user_contact FROM student_info");
    $getBirthdate = mysqli_query($conn, "SELECT user_birthdate FROM student_info");
    $getGender = mysqli_query($conn, "SELECT user_gender FROM student_info");

?>