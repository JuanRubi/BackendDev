<?php
    // Start the session.
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <!--------------        Navigation Bar      ----------------->
    <nav>
        <div class="navLinks">
            <a class="navLink activeNavLink" href="login.php">Login</a>
            <a class="navLink" href="membersPage.php">Members Page</a>
            <a class="navLink" href="logout.php">Logout</a>
        </div>
    </nav>

    <main>
        <!-------------------        Login Form      ------------------------>
        <?php 
            if(isset($_SESSION["loggedIn"]))
            {
                return;
            }
            else
            {
                $loginForm = <<<LOGINFORM
                <p>Testing a login page. (Only checks to see if username is Juan)<p>
                <h2>Enter a user name and password:</h2>

                <form method='POST' action='checkLogin.php'>
                    <label for="username">username: </label> 
                    <input type='text' name='username' id="username">
                    <label for="password">password: </label>
                    <input type='password' name='password'>
                    <input type='submit'>
                </form>
                LOGINFORM;

                echo $loginForm;
            }
        ?>

        <!----------------     Displaying Error Messages        ----------------->
        <?php 
            // Using the query string to recieve messages in login page.

            $isBlocked = $_GET["isBlock"];
            $incorrectCredentials = $_GET["badUserCredentials"];    // Use GET to access query string.

            if(isset($isBlocked))
            {
                echo "<h3>Please sign in.</h3>";
                echo "<script> document.getElementById('username').focus();  </script>";
            }
            else if($incorrectCredentials)
            {
                echo "<h3>Incorrect username or password</h3>";
                echo "<script> document.getElementById('username').focus();  </script>";
            }
        ?>
    </main>
</body>

</html>