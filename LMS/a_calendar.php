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
                    <h2 style="background-color:#8a8585">Home > Calendar</h2>
                    <div class="box">
                            <h1 style="margin-left: 2.5%;">Calendar</h1>
                            <div class="month">      
                            <ul>
                                <li class="prev">&#10094;</li>
                                <li class="next">&#10095;</li>
                                <li>
                                <span style="font-size:25px">July </span><br>
                                <span style="font-size:25px">2023</span>
                                </li>
                            </ul>
                            </div>

                            <ul class="weekdays">
                            <li>Mo</li>
                            <li>Tu</li>
                            <li>We</li>
                            <li>Th</li>
                            <li>Fr</li>
                            <li>Sa</li>
                            <li>Su</li>
                            </ul>

                            <ul class="days">  
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                            <li>6</li>
                            <li>7</li>
                            <li>8</li>
                            <li>9</li>
                            <li>10</li>
                            <li>11</li>
                            <li>12</li>
                            <li>13</li>
                            <li>14</li>
                            <li>15</li>
                            <li>16</li>
                            <li>17</li>
                            <li>18</li>
                            <li>19</li>
                            <li>20</li>
                            <li>21</li>
                            <li>22</li>
                            <li>23</li>
                            <li>24</li>
                            <li>25</li>
                            <li><span class="active">26</span></li>
                            <li>27</li>
                            <li>28</li>
                            <li>29</li>
                            <li>30</li>
                            <li>31</li>
                            </ul>
                    </div>
            </div>
        </div>
    </body>
</html>