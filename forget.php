<?php
$user=$_GET['user'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scscoe";


    // Create connection
    $conn = new mysqli($servername , $username , $password , $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT * from profile where username='$user'";
     if ($result=mysqli_query($conn,$query))
  {
   if(mysqli_num_rows($result) > 0)
    {
        $newpass=rand(1000,9999);
        $sql = "UPDATE profile SET password='$newpass' WHERE username='$user'";
if ($conn->query($sql) === TRUE) {
    echo "<style onload=\"sendpass('$newpass')\"></style>";  
} 
else
 {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
      
 }
  else{
     
    echo "<style onload=\"ivu()\"></style>"; 


        }
}
else
    echo "Query Failed.";
$conn->close();
?>
