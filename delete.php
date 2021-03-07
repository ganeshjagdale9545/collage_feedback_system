<?php
$e=$_GET['e'];
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

    $query = "SELECT * from student where email='$e'";
     if ($result=mysqli_query($conn,$query))
  {
   if(mysqli_num_rows($result) > 0)
    {
        
        $sql = "DELETE FROM student WHERE email='$e'";
if ($conn->query($sql) === TRUE) {
    
    
    echo "<style onload=\"del()\"></style>";  
} 
else
 {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
      
 }
  else{
     
    echo "<style onload=\"nf()\"></style>"; 


        }
}
else
    echo "Query Failed.";
$conn->close();
?>
