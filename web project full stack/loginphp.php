<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "student";

function validation($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = validation($_POST['name'] ?? '');
    $email = validation($_POST['email'] ?? '');
    $gpa  = validation($_POST['gpa'] ?? '');
    $selecting = validation($_POST['selecting'] ?? '');

    if(empty($name) || empty($email) || empty($gpa) || empty($selecting) ) {
        header("Location: index.php?error=All fields are required");
        exit();
    }
else if(empty($name)){
    header("Location: index.php?error=Enter your Full Name in English");
    exit();
}
else if(empty($email)){
    header("Location: index.php?error=Enter your Email Address (e.g moustafa@gmail.com)");
    exit();
}
else if(empty($gpa)){
    header("Location: index.php?error=Enter your Phone number");
    exit();
}
else if(empty($selecting)){
    header("Location: index.php?error=Enter your one of you parent phone number");
    exit();
}
    try {
        $sql = "INSERT INTO users (name, email, gpa , selecting ) 
                VALUES ('$name', '$email', '$gpa', '$selecting', )";
        $result = mysqli_query($conn, $sql);

        if ($result) {
        } else {
            header("Location: index.php?error=Something went wrong");
            exit();
        }
    } catch (mysqli_sql_exception $e) {
        if ($e->getCode() == 1062) {
            header("Location: index.php?error=Email address already exists");
            exit();
        } else {
            header("Location: index.php?error=Something went wrong");
            exit();
        }
    }
} else {
    header("Location: index.php?error=Invalid request method");
    exit();
}
