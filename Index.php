<?php

session_start();

include "db_conn.php";

// check if the both username are set in the POST
if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // sanitize both username and password from POST request
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    // check if username or password is empty
    if (empty($uname)) {
        header("Location: Loginform.php?error=User Name are required");
        exit();
    }else if (empty($pass)) {
        header("Location: Loginform.php?error=Password are required");
        exit(); 
    } else {
        if ($uname === "admin" && $pass === "admin") {
            echo "Logged in!";

            // storing in session variable
            $_SESSION['user_name'] = $uname;
            $_SESSION['name'] = "Admin";
            $_SESSION['id'] = 1;
            $_SESSION['success_message'] = "Logged in!";
            header("Location: Account_Info.php");
            exit();

        } else {
            header("Location: Loginform.php?error=Incorrect User name or password");
            exit();
        }
    }
}else{
    header("Location: Loginform.php");
    exit();
}
?>