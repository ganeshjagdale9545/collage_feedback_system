<?php

$e=$_GET['e'];
$c=$_GET['c'];
$f=$_GET['f'];
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

    $sql = "SELECT * from student where email='$e'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $codet=$row["code"] ;
        $brancht=$row["branch"] ;
        $snamet=$row["sname"] ;
        $classt=$row["class"] ;
    }
if($c==$codet)
{
echo "<style onload=\"sendfeed('$snamet','$e','$brancht','$classt','$f')\"></style>";
}
else
{
echo "<style onload=\"ivc()\"></style>";
}
}
 else {
    echo "<style onload=\"ive()\"></style>";
}
$conn->close();


?>
