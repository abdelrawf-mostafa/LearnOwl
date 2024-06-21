<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Course</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Edit Course</h1>
        <br>
        <br>
        <form method="post" action="edit_course.php">
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php }?>
            <label>ID:</label>
            <input type="text" name="id" value="" placeholder="Enter the row id to change the info"><br>
            <label>Title:</label>
            <input type="text" name="title" value="" placeholder="Enter the Text"><br>
            <label>Description:</label>
            <textarea name="description" placeholder="Enter the Description"></textarea><br>
            <label>Instructor:</label>
            <input type="text" name="instructor" value="" placeholder="Enter the Instructor"><br>
            <input type="submit" value="Update Course">
        </form>
        <br>
        <a href="courses.php">Back to Dashboard</a>
    </div>
</body>
</html>
