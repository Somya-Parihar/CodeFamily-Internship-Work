<?php
include("connection.php");
$rn = $_GET["rn"];
$result = mysqli_query($conn,"DELETE FROM info
WHERE Personid = $rn ");
echo '
    <script>
        window.location = "index.php";
    </script>';
?>