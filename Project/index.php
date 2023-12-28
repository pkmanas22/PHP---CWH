<?php
$insert = false;

// Check if form is submitted
if (isset($_POST['name'])) {

    // Database connection details
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $con = mysqli_connect($server, $username, $password);

    // Check connection
    if (!$con) {
        die("Connection to this database failed due to " . mysqli_connect_error());
    }

    // echo "Success connecting to the db";
    
    // Get form data
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $other = $_POST['other'];
    
    // SQL query to insert data into the database
    $sql  = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";

    // echo $sql;

    // Execute the query
    if ($con->query($sql) == true) {
        // echo "Successfully inserted";
        $insert = true; // Set insert flag to true
    } else {
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags and title -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    
    <!-- Google Fonts and external stylesheet -->
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Background image -->
    <img class="bg" src="bg.jpg" alt="FMAC, Balasore">
    
    <!-- Form container -->
    <div class="container">
        <h1>Welcome to F.M. Autonomous College US Trip form</h3>
        <p>Enter your details and submit this form to confirm your participation in the trip </p>
        
        <!-- Display success message if insert is successful -->
        <?php
        if ($insert) {
           echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
        }
        ?>
        
        <!-- Form -->
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="number" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="number" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="other" id="other" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button> 
        </form>
    </div>
    
    <!-- JavaScript file -->
    <script src="index.js"></script>
</body>

</html>
