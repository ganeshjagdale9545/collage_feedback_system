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

    $sql = "SELECT * FROM student where email='$e'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $n=$row["sname"] ;
        $b=$row["branch"] ;
        $c=$row["class"] ;
        $code=$row["code"] ;
    }
    echo "<style onload=\"resendcode('$n', '$e','$b','$c','$code')\"></style>"; 

}
 else {
    echo "<style onload=\"nf()\"></style>";
}
$conn->close();


?>
