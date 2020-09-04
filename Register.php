<?php

if (isset($_POST["Reg-sub"])) {
    require 'dbconh.php';
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    if (empty($username) || empty($email) || empty($pass)) {
        header("Location: ../Register-Login.html?error=emptyfields");
        exit();
    }
    else{
        $my_query = "INSERT  into users(username,password,email) VALUES ('$username','$pass','$email')";
        $result = $mysql_con->query($my_query);


    if (!$result)
	    die('Invalid query: ' . $mysql_con->error);
    else{
        header("Location: ../Register-Login.html"."?success");
     exit();   
    }
    }
}
else{
echo "ok";
    header("Location: ../Register-Login.html");
    exit();
}

