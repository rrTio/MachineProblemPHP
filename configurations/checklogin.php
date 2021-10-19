<?php
    require_once '../configurations/config.php';
            
    $studentNumber = $_POST['sNumber'];
    $password = $_POST['password'];

    if(empty($studentNumber) && empty($password)){
        echo '<script type="text/javascript">',
            'alert("ERROR. INVALID USERNAME OR PASSWORD");',
            'window.location.href="../index.php?error=no%20inputs"',
            '</script>';
    }

    if(!empty($studentNumber) && !empty($password)){
        
        if($sql = "SELECT * FROM student_info WHERE (user_firstName) = '$studentNumber' AND (user_password) = '$password';")
        {
            mysqli_query($conn, $sql);
            header("Location: ../landing.php?login=success");
        }

        if($sql = "SELECT * FROM student_info WHERE (user_firstName) = '$studentNumber' AND (user_password) != '$password';")
        {
            mysqli_query($conn, $sql);
            echo '<script type="text/javascript">',
            'alert("ERROR. INVALID USERNAME OR PASSWORD");',
            'window.location.href="../index.php?error=inputs"',
            '</script>';
        }

        if($sql = "SELECT * FROM student_info WHERE (user_firstName) != '$studentNumber' AND (user_password) = '$password';")
        {
            mysqli_query($conn, $sql);
            echo '<script type="text/javascript">',
            'alert("ERROR. INVALID USERNAME OR PASSWORD");',
            'window.location.href="../index.php?error=inputs"',
            '</script>';
        }
    }
?>