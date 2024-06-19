<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses List</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #4b7d7b;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-size: 28px;
            letter-spacing: 1px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            font-size: 18px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 15px;
            text-align: left;
            color: #555;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #e0f7fa;
            cursor: pointer;
            transform: scale(1.02);
            transition: all 0.3s ease;
        }

        tbody tr:hover td {
            background-color: #e0f7fa;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        td {
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        a {
            color: #3498db;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #2980b9;
        }

        .footer {
            text-align: center;
            padding: 20px;
            background-color: #4CAF50;
            color: white;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        .signature {
            text-align: center;
            margin-top: 20px;
            font-size: 16px;
            font-weight: bold;
            color: #4CAF50;
        }

        .signature span {
            background: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .signature span:hover {
            background-color: #4CAF50;
            color: #fff;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Courses List</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Course Name</th>
                    <th>Description</th>
                    <th>Instructor</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "courses_db";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["id"] . "</td>
                                <td>" . $row["course_name"] . "</td>
                                <td>" . $row["description"] . "</td>
                                <td>" . $row["instructor"] . "</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No courses found</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
