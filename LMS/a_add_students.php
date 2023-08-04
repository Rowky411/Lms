<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Database connection parameters
    include 'db_connect.php';
    // Escape user inputs for security (prevent SQL injection)
    $user_id = $conn->real_escape_string($_POST['user_id']);
    $password = $conn->real_escape_string($_POST['password']);
    $name = $conn->real_escape_string($_POST['name']);
    $class = $conn->real_escape_string($_POST['class']);
    $gender = $conn->real_escape_string($_POST['gender']);
    $state = $conn->real_escape_string($_POST['state']);
    $country = $conn->real_escape_string($_POST['country']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $email = $conn->real_escape_string($_POST['email']);
    $address = $conn->real_escape_string($_POST['address']);
    $dob = $conn->real_escape_string($_POST['dob']);
    $admission_date = $conn->real_escape_string($_POST['admission_date']);
    $status = $conn->real_escape_string($_POST['status']);

    // SQL query to insert data into the database
    $sql = "INSERT INTO students (user_id, password, name, class, gender, state, country, phone, email, address, date_of_birth, admission_date, status)
            VALUES ('$user_id', '$password', '$name', '$class', '$gender', '$state', '$country', '$phone', '$email', '$address', '$dob', '$admission_date', '$status')";

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
                    <h2 style="background-color:#8a8585">Home > Students > Add Students</h2>
                    <div class="box">
                    <a href="a_students.php"><button style="width: 300px; height:40px; font-size:20px"><img src="" alt="" width="20px" height="20px">&nbsp;&nbsp; All Students</button></a>
                        <button style="width: 300px; height:40px; font-size:20px"><img src="" alt="" width="20px" height="20px"> Add Students</button>
                        <button style="width: 300px; height:40px; font-size:20px"><img src="" alt="" width="20px" height="20px"> Upload Students</button><br><br>
                        <h2>Add Students Form</h2>
    <form action="/LMS/a_add_students.php" method="post">
        <label for="admission_no">Admission No:</label>
        <input type="text" id="admission_no" name="user_id" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="class">Class:</label>
        <input type="text" id="class" name="class" required><br><br>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select><br><br>

        <label for="state">State:</label>
        <input type="text" id="state" name="state" required><br><br>

        <label for="country">Country:</label>
        <input type="text" id="country" name="country" required><br><br>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="2" cols="50" required></textarea><br><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required><br><br>

        <label for="admission_date">Admission Date:</label>
        <input type="date" id="admission_date" name="admission_date" required><br><br>

        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
            <option value="graduated">Graduated</option>
            <option value="suspended">Suspended</option>
        </select><br><br>

        <input type="submit" value="Submit">
    </form>
                    </div>
            </div>
        </div>
    </body>
</html>