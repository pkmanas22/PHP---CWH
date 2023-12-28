<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditionals in PHP</title>
</head>
<body>
    <div class="container">
        <?php
            $age = 6;
            if($age>18){
                echo "You can go to the party";
            }
            else if($age==7){
                echo "You are 7 years old";
            }
            else if($age==6){
                echo "You are 6 years old";
            }
            else{
                echo "You can not go to the party";
            }
        ?>
    </div>
</body>
</html>