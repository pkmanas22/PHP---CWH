<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functio in PHP</title>
</head>
<body>
    <div class="container">
        <?php
            echo "<h1> Function </h1>";

            function print_number($number){
                echo "<br>Your number is ";
                echo $number;
            }

            print_number(10)
        ?>
    </div>
</body>
</html>