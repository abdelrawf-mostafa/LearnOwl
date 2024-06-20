<?php
 
$servername = "localhost";
$username = "your_username";
$password = "";
$dbname = "student";


$conn = new mysqli($servername, $username, $password, $dbname);

    $name = $_POST['name'];
	$email = $_POST['email'];
	$gpa = $_POST['gpa'];
	$selecting = $_POST['selecting'];
	

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

else {
    $stmt = $conn->prepare("INSERT into registration(name , email , gpa , selecting ) values(?, ?, ?, ? )");
    $stmt->bind_param("ssis", $name , $email , $gpa , $selecting );
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}


?>