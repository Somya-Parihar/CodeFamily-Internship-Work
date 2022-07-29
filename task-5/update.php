<?php
include("connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="show.css">
    <title>Document</title>
</head>
<body>
</body>

</html>
<?php
$rn = $_GET["rn"];
$result = mysqli_query($conn,"select * FROM info
WHERE Personid = $rn ");
$row = $result -> fetch_assoc();
echo '
<div class="container full no-border">
<div class="container full no-border hidden" id = "result">
<h1>Updated</h1>
</div>
<h1 class="main">Update</h1>
<div class="container" id="form">
<p class="name">ID:' . $row["Personid"] . '</p>
<p class="player-score">Name:'. $row["FirstName"].' '.$row["LastName"].
'</div>'.
'<div class="container no-border">'.
'<form action="" method="POST" class="form" id="form hidden">
        Firstname<input type="text" name="Fname" id="Fname">
        Lastname<input type="text" name="Lname" id="Lname">
        Age<input type="number" name="number" id="number">
        <input type="submit" value="submit" name="submit" class="btn">
</form>'.
'</div>'.
'</div>';
if(isset($_POST["submit"])){
    $Fname = $_POST["Fname"];
    $Lname = $_POST["Lname"];
    $age = $_POST["number"];
    echo $Fname;
    $update = mysqli_query($conn,"UPDATE info SET Firstname='$Fname' , Lastname = '$Lname' , age ='$age' WHERE Personid=$rn");
    if($update){
        echo '<script>
                window.location = "index.php"
            </script>';
    }
}
?>