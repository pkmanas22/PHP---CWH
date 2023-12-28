<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types in PHP</title>
</head>
<body>
    <div class="container">
        <?php
            // Constant
            echo "<h1> Constant </h1>";
            define("PI", 3.14);
            echo PI;

            // Alphanumeric characters are classified as strings.
            // Whole numbers are classified as integers.
            // Numbers with decimal points are classified as floating points.
            // True or false values are classified as Boolean.
            // Collection of similar types of elements are called Array.
            // An object is a specific instance of a class that serves as templates for objects.
            echo "<h1> Data types </h1>";
            echo "<h3> String </h3>";
            $var = "This is a string";
            echo var_dump($var);

            echo "<h3> Integer </h3>";
            $var = 200;
            echo var_dump($var);

            echo "<h3> Floating Point </h3>";
            $var = 20.554;
            echo var_dump($var);

            echo "<h3> Boolearn </h3>";
            $var = true;
            echo var_dump($var);

            echo "<h3> Array </h3>";
            $var = [5,10.2,"manas", true, [5,10,15]];
            echo var_dump($var);
        ?>
    </div> 
</body>
</html>