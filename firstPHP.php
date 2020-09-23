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

    <br><br>

    <!-------------     Built-in Functions      --------------------->
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

        echo "<br><br>";

        // strlen(x) - where x is a string
        print("strlen(str) - Returns the length of the string str.<br>");
        $stringLength = strlen("Carl F Gauss");
        echo "str = 'Carl F Gauss'<br>";
        echo "str length is: ";
        echo $stringLength;

        echo "<br><br>";

        // date() function
        $todaysDate = date("m/d/y");
        echo "date(x) - Returns today's date where x is the format of choice.<br>";
        echo $todaysDate;


    ?>

    <br><br>

    <!-------------------       Conditional Statements      ---------------------->
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

    <br><br>

    <!------------------        Includes        --------------------->
    <h3>Includes</h3>
    <p>Works like link for css or script src="" for JavaScript.</p>
    
    <?php include 'includeFile.php'; ?>

    <br>

    <!------------------        Arrays      ---------------------->
    <h3>Arrays</h3>

    <?php 
        echo "Arrays are declared by assigning array(x1,x2,...), where xN is the Nth item ";
        echo "in the array, to a variable. <br>";
        $numArray = array(0,1,2,3,4);
        echo "Array: ".$numArray[0]." ".$numArray[1]." ".$numArray[2]." ".$numArray[3]." ".$numArray[4];
        echo "<br>There are: ".count($numArray)." numbers in our array.<br><br>";

        // Using a for loop.
        for($i = 0; $i < count($numArray); $i++)
        {
            echo "Using for loop: ".$numArray[$i]."<br>";
        }

        echo "<br>";

        foreach($numArray as $number)
        {
            echo "Using foreach loop: ".$number."<br>";
        }



        // Key/value array. Uses key to access items instead of indices. 
        $nameValue = array("Juan" => "24", "Luis" => "15");
        echo "<br>Luis' age is: ".$nameValue['Luis'];
    ?>
</body>
</html>