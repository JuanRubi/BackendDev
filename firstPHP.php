<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First PHP</title>
</head>

<body>

    <!---------     Hello World!        ---------->
    <h1>Does this work too?</h1>
    <?php
    print("Hello World!");
    ?>
    <p>This does not update live thought which would have been nice.</p>

    <?php
        echo "Using echo instead of print().";
    ?>

    <br>

    <!------------      Variables       ---------------->
    <h3>Variables</h3>
    <?php
    $variable = "Variables start with a $ then with a letter or underscore.";   // Variabale rule.
    echo $variable;

    echo "<br>Using dot ".$variable;    // . is used for concatenation
    ?>

    <h3>Built-in Function</h3>
    <?php
        echo "phpinfo() - Gives information about php such as version being used.";

        // php single line comment.
        /* php multi-line comment. */
        $hiddenVariable = "Hide this variable";

        $integer1 = 5;      // No need to specify the type of variable!
        $floatNum = 10.4;
        echo "<br><br>Arithmetic";
        echo "<br>$integer1 + $floatNum = ". ($integer1 + $floatNum);
        echo "<br>$integer1 - $floatNum = ". ($integer1 - $floatNum);
        echo "<br>$integer1 x $floatNum = ". ($integer1 * $floatNum);
        echo "<br>$integer1 / $floatNum = ". ($integer1 / $floatNum);
    ?>

    <h3>Conditional Statements</h3>
    <p>Given an age output whether the person is an adult or not:</p>
    <?php 
        $num = 21;
        if($num < 17)
        {
            echo "You are not an adult.";
        }
        else
        {
            echo "You are an adult!";
        }
    ?>

</body>
</html>