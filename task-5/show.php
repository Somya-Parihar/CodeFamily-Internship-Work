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
    <div class="content">
        <h1 class="main">Database</h1>
    </div>
</body>
</html>
<?php
include("connection.php");
$sql = "select * from info";
$result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($conn));

if($result->num_rows > 0){
while($row = $result -> fetch_assoc()){
echo '
<div class="content-main">
    <p class="name">' . $row["Personid"] . '</p>
    <p class="player-score">'. $row["FirstName"].' '.$row["LastName"].' AGE: '.$row["Age"].'</p>
    <a class="btn-2" href="delete.php?rn='.$row["Personid"].' "><button type="submit" onclick="hide(event)" class="start" id="start">delete</button></a>
    <a class="btn-2" href="update.php?rn='.$row["Personid"].' "><button type="submit" class="start" id="start">update</button></a>
</div>'.
'<script>
hide = e => {
    console.log("hh")
}
</script>';
}
}
echo '<a href="index.php" class="start" style="width: 60%;margin: 2rem auto;">Go Home</p></a>';
?>
