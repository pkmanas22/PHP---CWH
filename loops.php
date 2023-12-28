<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops in PHP</title>
</head>
<body>
    <div class="container">
        <?php
            // Loops in PHP
            echo "<h1> While Loop </h1>";
            $a = 0;
            while ($a <= 10){
                echo "<br>The value of a is: ";
                echo $a;
                $a++;
            }
            
            echo "<h1> In Array </h1>";
            $languages = array("Python", "C++", "php", "NodeJs"); 
            
            $a = 0;
            while ($a < count($languages)) {
                echo "<br>The value of language is: ";
                echo $languages[$a];
                $a++;
            }
            
            // Do while loop
            echo "<h1> Do While Loop </h1>";
            $a = 200;
            do {
                echo "<br>The value of a is: ";
                echo $a;
                $a++;
            } while ($a < 10);


            // For loop
            echo "<h1> For Loop </h1>";
            for ($a=60; $a < 10; $a++) { 
                echo "<br>The value of a from the for loop is: ";
                echo $a;
            }

            foreach ($languages as $value) {
                echo "<br>The value from foreach loop is ";
                echo $value;
            }
        ?>
    </div>
</body>
</html>