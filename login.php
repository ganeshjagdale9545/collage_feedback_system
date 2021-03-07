<?php

$user=$_GET['user'];
$pass=$_GET['pass'];
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

    $sql = "SELECT * FROM profile where username='$user'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $passt=$row["password"] ;
    }
if($pass==$passt)
{
echo "<style onload=\"register()\"></style>";
}
else
{
echo "<style onload=\"ivp()\"></style>";
}
}
 else {
    echo "<style onload=\"ivu()\"></style>";
}
$conn->close();


?>
