<?php
include("connection.php");
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
        //fetch table rows from mysql db
        if(isset($_POST['insert'])){
            $sql = "select * from info";
            $result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($conn));

            if($result->num_rows > 0){
                while($row = $result -> fetch_assoc()){
                echo '
                    <div class="content-main">
                    <p class="name">' . $row["Personid"] . '</p>
                    <p class="player-score">'. $row["FirstName"].' '.$row["LastName"].'  AGE: '.$row["Age"].'</p>
                    <a class = "btn-2" href = "delete.php?rn='.$row["Personid"].' "target="_parent">delete</a>
                    </div>';
            }
        }
    }
            
    ?>