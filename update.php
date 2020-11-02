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
    
 //include 'db.php';
 if(isset($_POST['submit']))
 {
 $id = $_POST['user_id'];
 $username = $_POST['edit_name'];
 $email = $_POST['edit_email'];
 $password = $_POST['edit_password'];
 //update query
 $sql = " UPDATE `user_db` SET `user_name` = '$username', `user_email` = '$email', `user_password` = '$password' WHERE `user_db`.`user_id` = $id ";
 $query = mysqli_query($con,$sql);
 header('location:dashboard.php');
 }

?> 
