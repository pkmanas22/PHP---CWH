<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array in PHP</title>
</head>
<body>
    <div class="container">
        <?php
            // Arrays in php
            // $languages = ["Python", "C++", "php", "NodeJs"]; 
            $languages = array("Python", "C++", "php", "NodeJs"); 
            echo count($languages);   
            echo $languages[3];   
        ?>
    </div>
</body>
</html>