<?php 
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
    
    <nav>
        <div class="navLinks">
            <a class="navLink activeNavLink" href="login.php">Login</a>
            <a class="navLink"  href="#">Contact</a>
            <a class="navLink" href="#">Logout</a>
        </div>
    </nav>

    <main>
        <?php 
            if(isset($_SESSION["loggedIn"]))
            {
                return;
            }
            else
            {
                $loginForm = <<<LOGINFORM
                <p>Testing a login page.<p>
                <h2>Enter a user name and password:</h2>

                <form method='POST' action='checkLogin.php'>
                    <label for="username">username: </label> 
                    <input type='text' name='username'>
                    <label for="password">password: </label>
                    <input type='password' name='password'>
                    <input type='submit'>
                </form>
                LOGINFORM;

                echo $loginForm;
            }
        ?>
    </main>
</body>

</html>