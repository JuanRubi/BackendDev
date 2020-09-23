<?php 
    // Starting the session.
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>

<body>
    <h2>PHP Sessions</h2>
    <p>Sessions allow you to see who is visiting your site.</p>
    
    <?php 
        $_SESSION["name"] = "Juan";
        $_SESSION["pet"] = "Scooby";
        $_SESSION["pet2"] = "Luna";
        echo $_SESSION["name"];

        echo "<br><br>";

        echo "Printing session using print_r(): <br>";
        print_r($_SESSION);
    ?>

</body>
</html>