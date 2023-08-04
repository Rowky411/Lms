<!DOCTYPE html>
<html>
    <head>
        <title>Student Dashboard</title>
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
                    <img src="buser.png" alt=""height=65px width="65px" style="margin-left: 40%;">
                    <p style="font-size: 35px;text-align:center">011201050 <br> Naim Ahmed</p>
                    <button class="button1">Dashboard</button><br>
                    <a href="s_download.php"><button class="button1">Download</button><br></a>
                    <a href="s_grade.php"><button class="button1">Grade</button><br></a>
                    <a href="s_chats.php"><button class="button1">Chat</button><br></a>
                    <a href="s_notes.php"><button class="button1">Notes</button><br></a>
                    <a href="s_calculator.php"><button class="button1">Calculator</button><br></a>
                    <a href="s_calendar.php"><button class="button1">Calender</button><br></a>
                    <a href="s_counseling.php"><button class="button1">Counseling Hour</button><br></a>
                    <a href="index.php"><button class="button1">Home</button><br></a>
            </div>
            <div class="right">
                    <input type="text" placeholder="Search..." style="border: 1px solid #ccc;border-radius: 20px;padding: 8px 16px;font-size: 16px;width: 200px;outline: none; margin-left: 15px;margin-top: 15px;">
                    <button style="margin-left: 70%; height:40px; background-color:#ffb800; border-radius:25px">011201050 Naim Ahmed</button>
                    <br>
                    <h2 style="background-color:#8a8585">Home > Dashboard</h2>
                    <div class="box">
                        <div class="box1">
                            <h1 style="color: white; text-align:center;margin-top:15%">Current Courses</h1>
                            <b style="color: white; font-size:30px; margin-left:45%">5</b>
                        </div>
                        <div class="box2">
                            <h1 style="color: black; text-align:center;margin-top:15%">Attendance</h1>
                            <b style="color: black; font-size:30px; margin-left:42%">6/24</b>
                        </div>
                        <div class="box3">
                            <h1 style="color: black; text-align:center;margin-top:15%">Activities</h1>
                            <b style="color: black; font-size:30px; margin-left:47%">20</b>
                        </div>
                    </div>
                    <button class="b2"><img src="book.png" alt="" height="28" width="50">&nbsp;&nbsp; Summer 232 CSE 4165/CSE 465 (D) : Web Programming</button><br>
                    <button class="b2"><img src="book.png" alt="" height="28" width="50">&nbsp;&nbsp; Summer 232 CSE 324/CSE 3712 (C) : Computer Networks Laboratory/Computer Networks Laboratory</button><br>
                    <button class="b2"><img src="book.png" alt="" height="28" width="50">&nbsp;&nbsp; Summer 232 CSE 3421/CSI 321 (B) : Software Engineering</button><br>
                    <button class="b2"><img src="book.png" alt="" height="28" width="50">&nbsp;&nbsp; Summer 232 CSE 426/CSE 4326 (C) : Microprocessor, Microcontroller and Interfacing Laboratory</button><br>
                    <button class="b2"><img src="book.png" alt="" height="28" width="50">&nbsp;&nbsp; Summer 232 CSE 469/PMG 4101 (B) : Project Management</button><br>
                </div>
            </div>
        </div>
    </body>
</html>