
<?php
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "user";
//Create connection of database
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbname);
//Check connection
  if (!$conn)
    {
     die("Connection failed: " . mysqli_connect_error());
    }
    if(isset($_GET['id'])){
        $user_id = $_GET['id'];
        $delete = true;
        $sql = "DELETE FROM `user_db` WHERE `user_id` = $user_id";
        $result = mysqli_query($conn, $sql);
        header('location:dashboard.php');  
    }
?>