<?php
    include_once 'config.php';
            
    $studentNumber = $_POST['sNumber'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM student_info WHERE (user_firstName) = '$studentNumber' AND (user_password) = '$password';";
    mysqli_query($conn, $sql);

    header("Location: ../Database%20MP/landing.php?login=success");
?>