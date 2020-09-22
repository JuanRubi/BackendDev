<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process Form</title>
</head>

<body>
    <?php

        $user = $_POST["username"];
        $password = $_POST["password"];

        echo "Username: ".$user;
        echo "<br>Password: ".$password;
        // $_POST corresponds to the method="POST" chosen when creating form.
        // There is also $_GET for method="GET".

        // A simple verification/greeting of username.
        if($user != null && $password != null)
        {
            echo "<br>Welcome ".$user."!";
        }
        else
        {
            echo "<script> alert('Invalid username or password.'); </script>";
        }
    ?>    
</body>
</html>