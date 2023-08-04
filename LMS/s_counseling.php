<!DOCTYPE html>
<html>
    <head>
        <title>Calendar</title>
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
                width: 95%;
                margin-left: 2.5%;
            }
            * {box-sizing: border-box;}
                ul {list-style-type: none;}
                body {font-family: Verdana, sans-serif;}

            .month {
                padding: 70px 25px;
                width: 100%;
                background: #1a60bc;
                text-align: center;
                }
            .month ul {
                margin: 0;
                padding: 0;
                }
            .month ul li {
                color: white;
                font-size: 20px;
                text-transform: uppercase;
                letter-spacing: 3px;
                }
            .month .prev {
                float: left;
                padding-top: 10px;
                }
            .month .next {
                float: right;
                padding-top: 10px;
                }
            .weekdays {
                margin: 0;
                padding: 10px 0;
                background-color: #ddd;
                }
            .weekdays li {
                display: inline-block;
                width: 13.6%;
                color: #666;
                text-align: center;
                }
            .days {
                padding: 10px 0;
                background: #8dc0cc;
                margin: 0;
                }
            .days li {
                list-style-type: none;
                display: inline-block;
                width: 13.6%;
                text-align: center;
                margin-bottom: 5px;
                font-size:12px;
                color: #777;
                }
            .days li .active {
                padding: 5px;
                background: #1a60bc;
                color: white !important
                }
            @media screen and (max-width:720px) {
                .weekdays li, .days li {width: 13.1%;}
                }
            @media screen and (max-width: 420px) {
                .weekdays li, .days li {width: 12.5%;}
                .days li .active {padding: 2px;}
                }
            @media screen and (max-width: 290px) {
                .weekdays li, .days li {width: 12.2%;}
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
                    <h2 style="background-color:#8a8585">Home > Counseling</h2>
                    <div class="box">
                    </div>
            </div>
        </div>
    </body>
</html>