<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Database connection parameters
    include 'db_connect.php';
    // Escape user inputs for security (prevent SQL injection)
    $teacherID = $conn->real_escape_string($_POST['user_id']);
    $password = $conn->real_escape_string($_POST['password']);
    $name = $conn->real_escape_string($_POST['name']);
    $gender = $conn->real_escape_string($_POST['gender']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $email = $conn->real_escape_string($_POST['email']);
    $address = $conn->real_escape_string($_POST['address']);
    $dob = $conn->real_escape_string($_POST['dob']);
    $status = $conn->real_escape_string($_POST['status']);

    // SQL query to insert data into the database
    $sql = "INSERT INTO teachers (user_id, password, name, gender, phone, email, address, date_of_birth, status)
            VALUES ('$teacherID', '$password', '$name', '$gender', '$phone', '$email', '$address', '$dob', '$status')";

    if ($conn->query($sql) === TRUE) {
        // Teacher data inserted successfully
        echo "Teacher added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>



<!DOCTYPE html>
<html>
    <head>
        <title>Admin Dashboard</title>
        <style>
            body {
                margin: 0;
                padding: 0;
            }
            .main {
                display: flex;
                height: 100vh;
            }
            .left {
                flex: 1;
                background-color:#e2ddb0; 
            }
            .right {
                flex: 4;
                background-color:#f0f0f0;
            }
            .button1 {
                background-color: #ffb800;
                border-color: #ffb800;
                width: 100%;
                height: 50px;
                font-size: 30px;
                color: black;
            }
            .box{
                width: 100%;
                height: 40px;
                background-color: #8a8585;
            }
        </style>
    </head>
    <body>
        <div class="main">
        <div class="left">
                <h1 style="background-color: #ffb800; color:black; text-align:center; margin-top:0%; height:50px">e-LMS &nbsp;&nbsp;&nbsp;&nbsp;
                <img src="LMS.png" alt="" height="40px" width="40px">
                </h1>
                    <img src="admin1.png" alt=""height=65px width="65px" style="margin-left: 40%;">
                    <p style="font-size: 35px;text-align:center">Admin</p>
                    <a href="a_dashboard.php"><button class="button1">Dashboard</button><br></a>
                    <a href="a_students.php"><button class="button1">Students</button><br></a>
                    <a href="a_teachers.php"><button class="button1">Teachers</button><br></a>
                    <button class="button1">Academics</button><br>
                    <a href="a_performances.php"><button class="button1">Performances</button><br></a>
                    <a href="a_announcements.php"><button class="button1">Announcements</button><br></a>
                    <a href="a_calendar.php"><button class="button1">Calender</button><br></a>
                    <a href="index.php"><button class="button1">Home</button><br></a>
            </div>
            <div class="right">
                    <input type="text" placeholder="Search..." style="border: 1px solid #ccc;border-radius: 20px;padding: 8px 16px;font-size: 16px;width: 200px;outline: none; margin-left: 15px;margin-top: 15px;">
                    <button style="margin-left: 70%; height:40px; background-color:#ffb800; border-radius:25px">Admin</button>
                    <br>
                    <h2 style="background-color:#8a8585">Home > Teachers> Add Teachers</h2>
                    <div class="box">
                    <a href="a_teachers.php"><button style="width: 300px; height:40px; font-size:20px"><img src="" alt="" width="20px" height="20px">&nbsp;&nbsp; All Teachers</button></a>
                        <button style="width: 300px; height:40px; font-size:20px"><img src="" alt="" width="20px" height="20px"> Add Teachers</button>
                        <button style="width: 300px; height:40px; font-size:20px"><img src="" alt="" width="20px" height="20px"> Upload Teachers</button><br><br>
                        
                        <h1>Add Teacher</h1>
    <form action="/LMS/a_add_teachers.php" method="post">
        <label for="teacherID">Teacher ID:</label>
        <input type="text" id="teacherID" name="user_id" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select><br><br>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone"  required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea><br><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required><br><br>

        <label for="status">Status:</label>
        <input type="radio" id="status_active" name="status" value="active" checked>
        <label for="status_active">Active</label>
        <input type="radio" id="status_inactive" name="status" value="inactive">
        <label for="status_inactive">Inactive</label><br><br>

        <input type="submit" value="Add Teacher">
                    </div>
            </div>
        </div>
    </body>
</html>