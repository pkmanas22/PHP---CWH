<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators in PHP</title>
</head>
<body>
    <div class="container">
        <?php
            $variable1 = 20;
            $variable2 = 30;

            // Arithmetic Operators 
            echo "<h1> Arithmetic Operators </h1>";
            echo "The value of varible1 + variable2 is ";
            echo $variable1 + $variable2;
            echo "<br>";
            echo "The value of varible1 - variable2 is ";
            echo $variable1 - $variable2;
            echo "<br>";
            echo "The value of varible1 * variable2 is ";
            echo $variable1 * $variable2;
            echo "<br>";
            echo "The value of varible1 / variable2 is ";
            echo $variable1 / $variable2;
            echo "<br>";

            // Assignment Operators
            echo "<h1> Assignment Operators </h1>";
            $variable3 = $variable1;
            echo "The value of the variable 3 is ";
            echo $variable3;
            echo "<br>";
            $variable3 += 10;
            echo "The value of the variable 3 is ";
            echo $variable3;
            echo "<br>";
            $variable3 -= 20;
            echo "The value of the variable 3 is ";
            echo $variable3;
            echo "<br>";
            $variable3 *= 20;
            echo "The value of the variable 3 is ";
            echo $variable3;
            echo "<br>";
            $variable3 /= 20;
            echo "The value of the variable 3 is ";
            echo $variable3;
            echo "<br>";

            // Comparison Operators
            echo "<h1> Comparison Operators </h1>";
            echo "The value of 1==4 is ";
            echo var_dump(1==4); // var_dump()  holds type and value of the variable(s).
            echo "<br>";

            echo "The value of 1!=4 is ";
            echo var_dump(1!=4);
            echo "<br>";

            echo "The value of 1>=4 is ";
            echo var_dump(1>=4);
            echo "<br>";

            echo "The value of 1<=4 is ";
            echo var_dump(1<=4);
            echo "<br>";

            // Incrementing and Decrementing Operators
            echo "<h1> Incrementing and Decrementing Operators </h1>";
            echo $variable1++;
            // echo $variable1--;
            // echo ++$variable1;
            // echo --$variable1;
            echo "<br>";
            echo $variable1;

            // Logical Operators
            echo "<h1> Logical Operators </h1>";
            // and (&&)
            // or (||)
            // xor 
            // !

            // $myVar = (true and true);
            // $myVar = (false and true);
            // $myVar = (false and false);
            // $myVar = (true and false);
            // $myVar = (true or false);

            // $myVar = (true xor true);
            // $myVar = (false and true);
            // $myVar = (false xor false);
            $myVar = (true and false);
            echo var_dump($myVar);
        ?>
    </div>
</body>
</html>