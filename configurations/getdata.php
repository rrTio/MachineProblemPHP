<?php 

    include_once('../configurations/config.php');
    include('../configurations/checklogin.php');

    $getPWD = $setPassword;
    $getSN = $setSNumber;

    $query = mysqli_query($conn, "SELECT * FROM student_info WHERE user_studentNumber = '$studentNumber' AND user_password = '$password'");
    $qValue = mysqli_query($conn, $query);

    if(mysqli_num_rows($qValue) > 0){
        while($qValue = mysqli_fetch_assoc($qValue)){
            echo $firstName = $qValue['user_firstName'];
        }
    }
?>