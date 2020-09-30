
<?php
    session_start();

    // A simple login check. Talking to databases in real world.
    $username = $_POST["username"];

    if(trim($username) == "Juan")       // trim - cuts off extra white space surrounding the input
    {
        $_SESSION['loggedIn'] = true;
        header('Location: membersPage.php');    // Redirect to given location.
    }
    else
    {
        header('Location: login.php?badUserCredentials=true'); // Use query string ? to send info
    }
?>