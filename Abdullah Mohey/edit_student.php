<?php

 error_reporting(E_ALL);
 ini_set('display_errors', 1);
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "students_db";
 $conn = new mysqli($servername, $username, $password, $dbname);
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 $student = null;
 if (isset($_GET['id'])) {
     $id = $_GET['id'];
     $sql = "SELECT * FROM students WHERE id='$id'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
         $student = $result->fetch_assoc();
     } else {
         header("Location: students.php?error=Student not found");
         exit();
     }
 }
 if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['studentId'])) {
     $id = $_POST['studentId'];
     $name = htmlspecialchars(trim($_POST['name']));
     $email = htmlspecialchars(trim($_POST['email']));
     $gpa = floatval($_POST['gpa']);
     if (empty($name) || empty($email) || empty($gpa)) {
         header("Location: edit_student.php?id=$id&error=All fields are required");
         exit();
     } else {
         $sql = "UPDATE students SET name='$name', email='$email', gpa='$gpa' WHERE id='$id'";
         if ($conn->query($sql) === TRUE) {
             header("Location: edit_student.php?id=$id&success=Student updated successfully");
             exit();
         } else {
             header("Location: edit_student.php?id=$id&error=Error updating student: " . $conn->error);
             exit();
         }
     }
 }
 $conn->close();
?>
