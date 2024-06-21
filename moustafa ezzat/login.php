
<?php
include ("db_conn.php");



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="Udb_TF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./login.css" />
    <title>Login Page</title>
  </head>
  <body>
    <div class="login">
      <h1>Add New Student</h1>
      <form  action="" method="post">
        <div>
          <label for="name">Name</label>
          <input 
           type="text"
           id="name"
           name="name" 
           required placeholder="Enter Name"  dir="ltr"/>
        </div>
        <div>
          <label for="email">Email</label>
          <input 
           type="email" 
           id="email"
           name="email" 
           required placeholder="Enter Email" />
        </div>
        <div>
          <label for="gpa">GPA</label>
          <input
           type="text"
            id="gpa"
            min="0"
            name="gpa"
            required placeholder="Enter GPA from 1 to 4" />
        </div>
        <div class="courses">
          <label for="courses">Assigned Course</label>
          <select  id="courses" name="selecting" >
            <option name="selecting" value="Algorithms">Algorithms</option>
            <option name="selecting" value="DS">Data Structures</option>
            <option name="selecting" value="oop">Object Oriented Programming</option>
          </select>
        </div>

        <input type="submit" name="submit" value="submit">
      </form>
    </div>
  </body>
</html>