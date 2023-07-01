<?php
$servername = "localhost";
$username = "root";
$password = "noor";
$dbname = "login";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, "3308");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset( $_POST['name']) || isset($_POST['password']) || isset($_POST['btn']))
{
    $name = $_POST['name'];
    $password = $_POST['password'];
}

    $sql = "INSERT INTO login VALUES ('$name', '$password')";
    if($conn->query($sql) == true){
        echo "Successfully inserted";
        }
    else{
        echo "ERROR: $sql <br> $conn->error";
    }
    
        
//         $con->close();
?> 