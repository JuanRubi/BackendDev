<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connecting Database</title>
</head>

<body>
    <h1>Connecting to a Database using PHP</h1>

    <?php
    // Connection information. 
    $servername = "localhost";
    $username = "test1";
    $password = "password";
    $dbname = "learningmysql";

    // Creating the connection.
    $connection = new mysqli($servername, $username, $password, $dbname);

    // Check connection.
    if($connection->connect_error)
    {
        die("Connection failed: " . $connection->connect_error);
    }

    $sql = "SELECT * FROM myfirsttable";   // Using SQL commands in PHP.
    $result = $connection->query($sql);   // Using query() to return associative array of table.

    // Outputting the SQL table.
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            echo "Name: " . $row["name"] . " - Age: " . $row["age"] . " - Sex: " . $row["sex"] . "<br>";
        }
    }
    else
    {
        echo "0 records found";     // No records found in table.
    }

    $connection->close();       // Closing the connection.
    ?>
</body>
</html>