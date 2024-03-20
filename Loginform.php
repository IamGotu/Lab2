<!DOCTYPE html>

<html>

    <head>
        <title>LOGIN</title>
        <!-- Link to an external CSS stylesheet -->
        <link rel="stylesheet" type="text/css" href="Stylesheet.css">
    </head>

    <body>

        <!-- Form for user login, submits data to index.php using POST method -->
        <form action="index.php" method="post">

            <h2>LOGIN</h2>

            <!-- Check if the 'error' parameter is set in the URL and display error message-->
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <label>User Name</label>
            <input type="text"  name="uname" placeholder="User Name"><br>

            <label>Password</label>
            <input type="password" name="password" placeholder="Password"><br>
            
            <button type="submit">Login</button>
            
        </form>

    </body>

</html>
