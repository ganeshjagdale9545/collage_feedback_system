<?php
$n=$_GET['n'];
$e=$_GET['e'];
$b=$_GET['b'];
$c=$_GET['c'];
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
      echo "<style onload=\"ereg()\"></style>";
 }
  else{
    $code=rand(1000,9999);
$sql = "INSERT INTO student (sname, email,branch,class,code)
VALUES ('$n', '$e','$b','$c','$code')";
if ($conn->query($sql) === TRUE) {
    echo "<style onload=\"sendcode('$n', '$e','$b','$c','$code')\"></style>";  
} 
else
 {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
        }
}
else
    echo "Query Failed.";

?>
