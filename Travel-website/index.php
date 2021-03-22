<?php

$insert = false;


if(isset($_POST['name'])){

    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    
    // Create a database connection
    $conn = mysqli_connect($server, $username, $password);
    
    
    // Checking for connection success
    if(!$conn){
        die("connection failed due to some error". mysqli_connect_error());
    }
    else{
        // echo "connected successfully";
    }


    // Collection post variables
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
   
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $sql = " INSERT INTO `trip form`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `dd`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', current_timestamp());";

    // echo $sql;

    if($conn->query($sql) == true){
         $insert = true;
        //  echo var_dump($insert);
    }
    else{
        echo "ERROR $sql <br> $con->error";
    }

    $conn->close();

}

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Welcome to travel form</title>
</head>

<link rel="stylesheet" href="style.css">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">

<body>
    
    <img class="bg" src="https://edge.ixigo.com/ixi-api/img/5109100d83145002dc8592cf_600x315.jpg" alt=" loading">
    <div class="container">

        <h2> Welcome to Mumbais trip form  </h2>
        <p> Enter your details to get participate in the trip</p>

        <?php
        if($insert == true){
        echo "<p class = 'submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the Mumbai trip</p>";
        }
    ?>


        <form class ="form " action="index.php" method="post">

            <div class ="form-div ">
                <input class ="form-input" type="text" name="name" id="name" placeholder="Enter Your name">
            </div>

            <div class ="form-div " >
                <input class ="form-input" type="text" name="age" id="age" placeholder="Enter Your age">
            </div>

            <div class ="form-div ">
                <input class ="form-input" type="text" name="gender" id="gender" placeholder="Enter Your gender">
            </div>

            <div class ="form-div ">
                <input class ="form-input" type="email" name="email" id="email" placeholder="Enter Your email">
            </div>

            <div class ="form-div ">
                <input class ="form-input" type="phone" name="phone" id="phone" placeholder="Enter Your phone number">
            </div>


            <button class="btn"> Submit </button>
            <!-- <button class="btn"> Reset </button> -->
<!-- 
            INSERT INTO `trip` (`srno`, `name`, `age`, `gender`, `email`, `phone`, `dd`) VALUES ('1', 'test-name', '23', 'male', 'teast@gmail.com', '1234567899', current_timestamp()); -->
        </form>
    </div>

</body>

</html>

