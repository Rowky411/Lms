<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="message.css"/>
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
                    <a href="s_dashboard.php"><button class="button1">Dashboard</button><br>
                    <a href="s_download.php"><button class="button1">Download</button><br></a>
                    <a href="s_grade.php"><button class="button1">Grade</button><br></a>
                    <a href="s_chats.php"><button class="button1">Chat</button><br></a>
                    <a href="s_notes.php"><button class="button1">Notes</button><br></a>
                    <button class="button1">Trash</button><br>
                    <a href="s_calendar.php"><button class="button1">Calender</button><br></a>
                    <a href="s_counseling.php"><button class="button1">Counseling Hour</button><br></a>
                    <a href="index.php"><button class="button1">Home</button><br></a>
            </div>
            <div class="right">
                    <input type="text" placeholder="Search..." style="border: 1px solid #ccc;border-radius: 20px;padding: 8px 16px;font-size: 16px;width: 200px;outline: none; margin-left: 15px;margin-top: 15px;">
                    <button style="margin-left: 70%; height:40px; background-color:#ffb800; border-radius:25px">011201050 Naim Ahmed</button>
                    <br>
                    <h2 style="background-color:#8a8585">Home > Chats</h2>
                    <div class="container">
      <div class="msg-header">
        <div class="container1">
          <img src="user1.png" class="msgimg" />
          <div class="active">
            <p>User name</p>
          </div>
        </div>
      </div>

      <!-- Chat inbox  -->
      <div class="chat-page">
        <div class="msg-inbox">
          <div class="chats">
            <div class="msg-page">

              <div class="received-chats">
                <div class="received-chats-img">
                  <img src="user2.png" />
                </div>
                <div class="received-msg">
                  <div class="received-msg-inbox">
                    <p>Hi !!Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non quas nemo eum, earum sunt, nobis similique quisquam eveniet pariatur commodi modi voluptatibus iusto omnis harum illum iste distinctio expedita illo!</p>
                    <span class="time">18:06 PM | July 24</span>
                  </div>
                </div>
              </div>

              <div class="outgoing-chats">
                <div class="outgoing-chats-img">
                  <img src="user1.png" />
                </div>
                <div class="outgoing-msg">
                  <div class="outgoing-chats-msg">
                    <p class="multi-msg">Hello, Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo nobis deleniti earum magni recusandae assumenda.</p>
                    <p class="multi-msg">Lorem ipsum dolor sit amet consectetur.</p>
                    <span class="time">18:30 PM | July 24</span>
                  </div>
                </div>
              </div>
              <div class="received-chats">
                <div class="received-chats-img">
                  <img src="user2.png" />
                </div>
                <div class="received-msg">
                  <div class="received-msg-inbox">
                    <p class="single-msg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. iste distinctio expedita illo!</p>
                    <span class="time">18:31 PM | July 24</span>
                  </div>
                </div>
              </div>
              <div class="outgoing-chats">
                <div class="outgoing-chats-img">
                  <img src="user1.png" />
                </div>
                <div class="outgoing-msg">
                  <div class="outgoing-chats-msg">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, sequi.</p>
                    <span class="time">18:34 PM | July 24</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="msg-bottom">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Write message..."/>
              <span class="input-group-text send-icon">
                <i class="bi bi-send"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
                    
                </div>
            </div>
        </div>
    </body>
</html>