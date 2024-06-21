<?php 
$conn = mysqli_connect("localhost","root","","student") or die(mysqli_error($conn));

if(isset($_POST["submit"])){

    $name = $_POST["name"] ;
  
    $email = $_POST["email"];
  
    $gpa = $_POST["gpa"];
  
    $selecting = $_POST["selecting"];
  
     $request = "insert into nstudent (name, email, gpa, selecting) 
    values('$name', '$email', '$gpa', '$selecting')";
  
    mysqli_query( $conn, $request);
    echo "<script>alert('Data has been sent!')</script>";
  }else{
   echo"<script>alert ('something wrong tyr again!!')</script>";
  
  }   
?>