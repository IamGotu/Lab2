<?php

session_start();

// display session from the file "index.php"
if (isset($_SESSION['success_message'])) {
    echo $_SESSION['success_message'];
    unset($_SESSION['success_message']);
}

?>

<!DOCTYPE html>

<html>

    <head>
        <title>Account Info</title>
        <link rel="stylesheet" type="text/css" href="Stylesheet2.css">
    </head>

    <body>

        <!-- Form for user login, submits data to home.php using POST method -->
        <form action="home.php" method="post">

            <h2>Account Information</h2>

            <!-- Check if the 'error' parameter is set in the URL and display it-->
            <?php if (isset($_GET['message'])) { ?>
                <p><?php echo htmlspecialchars($_GET['message']); ?></p>
            <?php } ?>

            <label>Username</label>
            <input type="text" name="username" required><br>

            <label>Password</label>
            <input type="password" name="password" required><br>

            <label>Last Name</label>
            <input type="text" name="Lastname" required><br>

            <label>First Name</label>
            <input type="text" name="First_name" required><br>

            <label>Middle Name</label>
            <input type="text" name="Middle_name"><br>

            <label>Email</label>
            <input type="email" name="Email" required><br>

            <label>Status</label>
            <input type="text" name="Status" required><br>

            <label>Active</label>
            <input type="text" name="Active" required><br>

            <button type="submit">Submit</button>

        </form>

    </body>

</html>