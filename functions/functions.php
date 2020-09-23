
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>

    <h2>Functions</h2>
    <p>Creating PHP functions is very similar to how functions are created in JavaScript.</p>
    <?php 
        // Function without arguments.
        function firstFunc()
        {
            echo "Creating our first function.";
        }

        echo "Function output:  ";
        firstFunc();

        echo "<br><br>";

        // Function with arguments.
        function calculateSum($num1, $num2)
        {
            return $num1 + $num2;       // Returning values.
        }

        $totalSum = calculateSum(15,23);
        echo "Using functions to perform calculations.<br>";
        echo "15 + 23 = ".$totalSum;
    ?>
    
</body>
</html>