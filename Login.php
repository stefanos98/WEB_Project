<?php

if (isset($_POST["Log-sub"])) {
    // Include the database
    require 'dbconh.php';
    $username = $_POST["username"];
    $pass = $_POST["password"];
    //Check 
    if (empty($username)  || empty($pass)) {
        header("Location: ../Register-Login.html"."?error=emptyfields");
        exit();
    }
    //Connect with database & allow/deny access
    else{
        $my_query_check = "SELECT * FROM users WHERE (users.username ='$username' AND users.password = '$pass')";
        $result_check = $mysql_con->query($my_query_check);
        $row = $result_check->fetch_array();
        if (!$result_check) {
            header("Location: ../Register-Login.html"."?error=No such user".$username."or invlaid pass");
            exit();
        }
        else {
            session_start();
            if (isset($_SESSION['session_username']))
            {
	        echo "Έχεις κάνει ήδη login <b>".$_SESSION['session_username']."</b>! Μια φορά αρκεί.";
	        echo "<br><a href='logoff.php'>Log off</a>";
            }
            //Get all the info from database
            else{
                //Check if the username exists in the database
                if ($stmt -> num_rows > 0 ){
                    //Load userid & password 
                    $stmt -> bind_result ($id, $pass);
                    $stmt -> fetch();
                    //Terminate SQL statement
                    $stmt -> close();
                }
                //Verify the password
                if (md5($_POST['user.password']) === $pass) {
                    $_SESSION['session_username'] = $username;
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['user_pass'] = $pass; 
                }
                
                //If user has logged in
		        if ($row["status"]==="user") {
                    header("Location: ../MainUser.html"."?id = ".$row["id"]);
                    exit();
                }else{
                    header("Location: ../MainAdmin.html");
                    exit();

                }
	            }
            }       
        }
 
    }
else{
    header("Location: ../Register-Login.html");
    exit();
}
