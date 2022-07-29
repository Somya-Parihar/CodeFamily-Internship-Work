<?php

use LDAP\Result;

include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
</head>
<body>
    <div class="container">
        <div class="start-page" id="start-main">
            <button type="submit" onclick="hide(event)" class="start" id="start">Insert data</button>
            <a href="show.php" class="start">show data</a>
        </div>
    <form action="" method="POST" class="form hidden" id="form">
        Firstname<input type="text" name="Fname" id="Fname">
        Lastname<input type="text" name="Lname" id="Lname">
        Age<input type="number" name="number" id="number">
        <input type="submit" value="submit" name="submit" class="btn">
    </form>
    </div>
    <script>
        var show = document.getElementById("start-main");
        var form = document.getElementById("form");
        unhide = () => {
            show.classList.add("hidden");
            form.classList.remove("hidden");
        }
        hide = () => {
            unhide();
            console.log("hh")
        }
    </script>
</body>
<?php
        if(isset($_POST['submit'])){
            $Fname = $_POST["Fname"];
            $Lname = $_POST["Lname"];
            $age = $_POST["number"];
            $result = mysqli_query($conn,"INSERT INTO info (Firstname, Lastname, age)
            VALUES ('$Fname', '$Lname', $age)");
            if($result){
                echo 'sucess';
            }
            else echo 'error';
        }
            
?>

    
</html>