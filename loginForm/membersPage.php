<?php
    // Start the session.
    session_start();

    if(isset($_SESSION['loggedIn']))
    {
        // do nothing if logged in already.
    }
    else
    {
        header('Location: login.php?isBlock=true');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Members Page</title>
</head>

<body>
    <!--------------        Navigation Bar      ----------------->
    <nav>
        <div class="navLinks">
            <a class="navLink" href="login.php">Login</a>
            <a class="navLink activeNavLink" href="membersPage.php">Members Page</a>
            <a class="navLink" href="logout.php">Logout</a>
        </div>
    </nav>

    <main>
        <h2>Welcome Members!</h2>
    </main>
</body>

</html>