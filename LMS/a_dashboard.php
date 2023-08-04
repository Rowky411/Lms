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
                height: 250px;
            }
            .box1{
                float: left;
                width: 25%;
                height: 200px;
                background-color: #200c1f;
                margin-left: 7%;
            }
            .box2{
                float: left;
                width: 25%;
                height: 200px;
                background-color: #93ff61;
                margin-left: 5%;
            }
            .box3{
                float: left;
                width: 25%;
                height: 200px;
                background-color: #73ffd5;
                margin-left: 5%;
            }
            .b2{
                width: 90%;
                height: 80px;
                margin-left: 5%;
                font-size: 30px;
                text-align: left;
                background-color: wheat;
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
                    <h2 style="background-color:#8a8585">Home > Dashboard</h2>
                    <div class="box">
                        <div class="box1">
                            <h1 style="color: white; text-align:center;margin-top:15%">Users</h1>
                            <b style="color: white; font-size:30px; margin-left:45%">22374</b>
                        </div>
                        <div class="box2">
                            <h1 style="color: black; text-align:center;margin-top:15%">Couses</h1>
                            <b style="color: black; font-size:30px; margin-left:42%">813</b>
                        </div>
                        <div class="box3">
                            <h1 style="color: black; text-align:center;margin-top:15%">Activities</h1>
                            <b style="color: black; font-size:30px; margin-left:47%">18618</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>