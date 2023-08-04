<!DOCTYPE html>
<html>
    <head>
        <title>Student Calculator</title>
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
                width: 24%;
                margin-left: 40%;
                margin-top: 7.5%;
                background-color: #3a4452;
                padding: 20px;
                border-radius: 10px;
            }
            .box form input{
                border: 0;
                outline: 0;
                width: 60px;
                height: 60px;
                border-radius: 10px;
                box-shadow: -8px -8px 15px rgba(255,255,255,0.1),5px 5px 15px rgba(0,0,0,0.2);
                font-size: 20px;
                color: white;
                cursor: pointer;
                margin: 10px;
                background-color: transparent;
            }
            .box form .display{
                display: flex;
                justify-content: flex-end;
                margin: 20px 5px;
                width:94%;
            }
            .box form .display input{
                text-align: right;
                flex: 1;
                font-size: 45px;
                box-shadow: none;
            }
            .box form .equal{
                width: 145px;
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
                    <h2 style="background-color:#8a8585">Home > Calculator</h2>
                    <div class="box">
                        <form action="">
                            <div>
                                <input type="text" name="display" class="display">
                            </div>
                            <div>
                                <input type="button" value="AC">
                                <input type="button" value="DE">
                                <input type="button" value=".">
                                <input type="button" value="/">
                            </div>
                            <div>
                                <input type="button" value="7">
                                <input type="button" value="8">
                                <input type="button" value="9">
                                <input type="button" value="*">
                            </div>
                            <div>
                                <input type="button" value="4">
                                <input type="button" value="5">
                                <input type="button" value="6">
                                <input type="button" value="-">
                            </div>
                            <div>
                                <input type="button" value="1">
                                <input type="button" value="2">
                                <input type="button" value="3">
                                <input type="button" value="+">
                            </div>
                            <div>
                                <input type="button" value="00">
                                <input type="button" value="0">
                                <input type="button" value="=" class="equal">
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </body>
</html>