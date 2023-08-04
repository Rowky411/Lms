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
                    <h2 style="background-color:#8a8585">Home > Teachers</h2>
                    <div class="box">
                        <button style="width: 300px; height:40px; font-size:20px"><img src="" alt="" width="20px" height="20px">&nbsp;&nbsp; All Teachers</button>
                        <a href="a_add_teachers.php"><button style="width: 300px; height:40px; font-size:20px"><img src="" alt="" width="20px" height="20px"> Add Teachers</button></a>
                        <button style="width: 300px; height:40px; font-size:20px"><img src="" alt="" width="20px" height="20px"> Upload Teachers</button><br><br>
                        <table border="1" cellspacing="0" style="width: 90%; margin-left:5%">
                        <caption><b style="color: blue; font-size:30px">Registered Teachers</b></caption>
                            <thead>
                            <tr style="background-color: #8a8585;">
                                <th>S/N</th>
                                <th>Teacher ID</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>DOB</th>
                                <th>Status</th>

                            </tr>
                            </thead>
                            
                            <tbody>
                            <?php
                            include 'db_connect.php';
                                $sql = "SELECT * FROM teachers";

                                $result = $conn->query($sql);

                                
                                if ($result->num_rows > 0) {
                                    
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<tr>';
                                        echo '<td>' . $row['serial_no'] . '</td>';
                                        echo '<td>' . $row['user_id'] . '</td>';
                                        echo '<td>' . $row['name'] . '</td>';
                                        echo '<td>' . $row['gender'] . '</td>';
                                        echo '<td>' . $row['phone'] . '</td>';
                                        echo '<td>' . $row['email'] . '</td>';
                                        echo '<td>' . $row['address'] . '</td>';
                                        echo '<td>' . $row['date_of_birth'] . '</td>';
                                        echo '<td>' . $row['status'] . '</td>';
                                        echo '</tr>';
                                    }
                                } else {
                                    // If there are no records in the table
                                    echo '<tr><td colspan="9">No records found</td></tr>';
                                }

                            // Close the connection
                            $conn->close();
                            ?>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </body>
</html>