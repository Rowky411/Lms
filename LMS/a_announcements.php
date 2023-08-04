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
                    <h2 style="background-color:#8a8585">Home > Announcements</h2>
                    <div class="box">
                        <button style="width: 300px; height:40px; font-size:20px"><img src="upload.png" alt="" width="20px" height="20px">&nbsp;&nbsp; To Students</button>
                        <button style= "width: 300px; height:40px; font-size:20px"><img src="upload.png" alt="" width="20px" height="20px">&nbsp;&nbsp; To Teachers</button><br><br><br>
                        <form action="">
                        <textarea id="" name="" rows="10" cols="100" style="margin-left:15%;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae dolores quaerat obcaecati excepturi modi consectetur tenetur vero aut odio, velit nesciunt in, iure, iste at maxime quisquam ipsa facere veritatis. Veniam sequi asperiores illo, facilis eveniet alias nihil laudantium voluptate quo, dolorum aut, explicabo eligendi pariatur? Cupiditate perspiciatis saepe assumenda illo commodi necessitatibus dignissimos obcaecati, eaque dolore velit tenetur error cum! Laboriosam enim accusamus voluptate, earum similique praesentium provident ipsa delectus? Nesciunt tempore hic alias modi cumque aspernatur sed quia accusamus, beatae reiciendis aperiam iure illo repellat laudantium ab fugit adipisci cum eaque quae distinctio labore unde eos. Iure consequuntur eaque incidunt voluptatem veniam, nobis voluptas animi dignissimos iste earum aliquam, mollitia sunt? Pariatur laudantium modi consectetur sint odio, esse eveniet quisquam corporis? Distinctio dolorum laudantium maxime corrupti corporis illum ullam ea, rerum quisquam blanditiis doloremque maiores cupiditate minima soluta dolore accusantium incidunt tempore beatae. Necessitatibus id nostrum quaerat tenetur possimus obcaecati hic a ratione mollitia eligendi ut quos, atque quod sint provident architecto quam. Deleniti at sunt vitae repellendus recusandae fugiat praesentium ipsa odit! Modi suscipit harum ratione iusto et ad, eveniet rem. Quidem neque voluptatum iure aliquam odio labore ducimus maiores, nam explicabo blanditiis saepe odit debitis necessitatibus. Enim, necessitatibus aliquid suscipit veniam veritatis repudiandae hic maxime, quos modi beatae obcaecati unde minima distinctio exercitationem minus? Quibusdam pariatur perspiciatis provident quod. Dolore maiores quod consequatur eum blanditiis aliquid minima delectus, ad natus aliquam cupiditate consectetur, in odit! Architecto rem laboriosam hic, qui amet debitis necessitatibus assumenda. Et omnis quibusdam ipsa velit quam, alias molestiae qui quia? Odio dolorem, hic praesentium nam facilis quae eum nisi sequi quod sit dolore consectetur, impedit tenetur ad ipsam maiores quaerat ea quisquam. Repellat explicabo minima dignissimos porro sint, illo earum. Repudiandae accusamus voluptas consectetur amet nihil autem sed iste optio, velit quod!</textarea><br><br><br>
                        <button class="button">SAVE</button>
                        </form>
                    </div>
            </div>
        </div>
    </body>
</html>