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
                height: 40px;
                background-color: #8a8585;
            }
            .button {
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 8px 12px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 15px;
                margin-left: 64%;
                border-radius: 25%;
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
                    <a href="s_dashboard.php"><button class="button1">Dashboard</button><br></a>
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
                    <h2 style="background-color:#8a8585">Home > Notes</h2>
                    <div class="box">
                        <button style="width: 300px; height:40px; font-size:20px"><img src="upload.png" alt="" width="20px" height="20px">&nbsp;&nbsp; See Notes</button><br><br><br>
                        <form action="">
                        <label for="" style="color: blue;font-size:30px; margin-left:10%">Save Notes Here..</label> <br><br>
                        <textarea id="" name="" rows="10" cols="100" style="margin-left:15%;"></textarea><br><br><br>
                        <button class="button">SAVE</button>
                        </form>
                    </div>
            </div>
        </div>
    </body>
</html>