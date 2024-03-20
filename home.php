<?php

session_start();

// include file for database connection
include "db_conn.php";

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Sanitize input data obtained from the POST request
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    $Lastname = validate($_POST['Lastname']);
    $First_name = validate($_POST['First_name']);
    $Middle_name = validate($_POST['Middle_name']);
    $Email = validate($_POST['Email']);
    $Status = validate($_POST['Status']);
    $Active = validate($_POST['Active']);

    // SQL query to insert user data into the database
    $sql = "INSERT INTO user (username, password, Lastname, First_name, Middle_name, Email, Status, Active)
            VALUES ('$username', '$password', '$Lastname', '$First_name', '$Middle_name', '$Email', '$Status', '$Active')";
        
    if (mysqli_query($conn, $sql)) {
            // Redirect with a success message
            echo "Account info submitted successfully!";
    } else {
        // Display an error message if the query fails
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

        mysqli_close($conn);
    }
?>
