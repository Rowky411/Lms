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
                    <button class="button1">Download</button><br>
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
                    <h2 style="background-color:#8a8585">Home > Download</h2>
                    <div class="box">
                        <button style="width: 300px; height:40px; font-size:20px"><img src="download.png" alt="" width="20px" height="20px">&nbsp;&nbsp; All Downloads</button>
                        <button style="width: 300px; height:40px; font-size:20px"><img src="upload.png" alt="" width="20px" height="20px"> Upload Personal Documents</button><br><br>
                        <table border="1" cellspacing="0" style="width: 90%; margin-left:5%">
                        <caption><b style="color: blue; font-size:30px">Files You Have Downloaded</b></caption>
                            <tr style="background-color: #8a8585;">
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Size</th>
                                <th>Type</th>
                                <th>Date</th>
                            </tr>
                            <tr style="height: 20px;">
                                <td align="center">1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr style="height: 20px;">
                                <td align="center">2</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr style="height: 20px;">
                                <td align="center">3</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr style="height: 20px;">
                                <td align="center">4</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr style="height: 20px;">
                                <td align="center">5</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr style="height: 20px;">
                                <td align="center">6</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr style="height: 20px;">
                                <td align="center" style="width: 10px;">7</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
            </div>
        </div>
    </body>
</html>