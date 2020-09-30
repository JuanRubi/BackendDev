<?php
    // Start the session.
    session_start();
    session_unset();    // Unsets all variables.
    session_destroy();     // Ends the session.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Logout Page</title>
</head>

<body>
    <!--------------        Navigation Bar      ----------------->
    <nav>
        <div class="navLinks">
            <a class="navLink" href="login.php">Login</a>
            <a class="navLink" href="membersPage.php">Members Page</a>
            <a class="navLink activeNavLink" href="logout.php">Logout</a>
        </div>
    </nav>

    <main>
        <h2>You have been logged out.</h2>
    </main>
</body>

</html>