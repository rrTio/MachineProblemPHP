<?php
    include_once 'configurations/config.php';
            
    $studentNumber = $_POST['sNumber'];
    $password = $_POST['password'];
    
    
        
    $sql = "SELECT * FROM student_info WHERE (user_firstName) = '$studentNumber' AND (user_password) = '$password';";
    mysqli_query($conn, $sql);
    
    if($studentNumber == "" || $password == "")
    {
        echo '<script language="javascript">'; 
        echo 'alert("Invalid Username or Password")'; 
        echo '</script>';
    }
    else{
    header("Location: ../landing.php?login=success");    
    }
?>