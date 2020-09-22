<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>

<body>
    <h1>Forms</h1>
    <p>PHP can process the forms that we create in HTML. To make sure they are filled
        out properly.
    </p>

    <p>Please enter your username and password below.</p>
    <form method="POST" action="processForm.php">
        <label for="username">username: </label>
        <input type="text" name="username">
        <label for="password">password: </label>
        <input type="password" name="password">
        <input type="submit">
    </form>
    
</body>
</html>