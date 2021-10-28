<?php
    include_once('../configurations/config.php');

    if(isset($_POST['btnLogin'])){
        $studentNumber = $_POST['sNumber'];
        $password = $_POST['password'];
        $sql = mysqli_query($conn, "SELECT * FROM student_info WHERE user_studentNumber = '$studentNumber' AND user_password = '$password'");
        $returned = mysqli_fetch_array($sql);

        if($returned > 0){
            $setSNumber = $studentNumber;
            $setPassword = $password;
            mysqli_query($conn, $sql);
            header("Location: ../landing.php");
        }
    }
?>

