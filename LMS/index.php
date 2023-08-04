<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>e-Learing Management System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
		
		h1 {
			text-align: center;
			font-size: 36px;
			color: #333;
		}
		
		.notice {
			background-color: #fff;
			border: 1px solid #ccc;
			padding: 20px;
			margin-bottom: 20px;
		}
		
		.notice h2 {
			font-size: 24px;
			margin-top: 0;
			color: #333;
		}
		
		.notice p {
			font-size: 18px;
			margin: 0;
			color: #666;
		}
	</style>
</head>

<body>
    <?php include 'navbar.php'; ?>
    
    <div class="section1" align="center">
        <label class="img_txt">"Unlocking Knowledge, Unleashing Potential"</label>
        <img class="main_img" src="school_management.jpg">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="welcome_img" src="learn.png" style="width:72%">
            </div>
            <div class="col-md-8">
                <h1>Welcome to LMS</h1>
                <p style="text-align: justify;">
                Welcome to our cutting-edge e-learning management system (ELMS) designed exclusively for our esteemed university! ELMS revolutionizes the way we approach education, offering a seamless and intuitive platform that empowers both students and faculty members alike. With ELMS, accessing and managing educational resources has never been easier. Students can effortlessly enroll in courses, access lecture materials, submit assignments, and engage in interactive discussions with their peers. Our faculty members can utilize ELMS to streamline course administration, share multimedia-rich content, and efficiently grade assignments.
                </p>
            </div>
        </div>
    </div>
    <center>
        <h1>Our Instructors</h1>
        <div class="row">
            <div class="column">
                <img src="teacher3.png" style="width:70%">
                <figcaption>
                    <p style="font-size: 15px;"><b style="color:brown; font-size:25px">Meet Our Expert Instructors</b> <br> Our e-learning management system is led by a team of highly skilled and passionate instructors.</p>
                </figcaption>
            </div>
            <div class="column">
                <img src="teacher2.png" style="width:70%">
                <figcaption>
                    <p style="font-size: 15px;"><b style="color:brown; font-size:25px">Expertise Across Diverse Subjects</b><br>Our instructors boast a diverse range of expertise, covering a wide spectrum of subjects and disciplines. </p>
                </figcaption>
            </div>
            <div class="column">
                <img src="teacher1.png" style="width:70%">
                <figcaption>
                    <p style="font-size: 15px;"><b style="font-size: 25px; color:brown">Interactive & Supportive Environment</b><br>At the heart of our e-learning platform are instructors dedicated to fostering an interactive and supportive learning environment.</p>
                </figcaption>
                </p>
            </div>
        </div>
    </center>
    <center>
        <h1>Our Courses</h1>
        <div class="row">
            <div class="column">
                <img src="schooler.png" style="width:62%">
                <figcaption>
                    <h4>SCHOOL OF HUMANITIES AND SOCIAL SCIENCES</h4>
                </figcaption>
            </div>
            <div class="column">
                <img src="science.png" style="width:70%">
                <figcaption>
                    <h4>SCHOOL OF SCIENCE & ENGINEERING</h4>
                </figcaption>
            </div>
            <div class="column">
                <img src="commerce.png" style="width:70%">
                <figcaption>
                    <h4>SCHOOL OF BUSINESS & ECONOMICS</h4>
                </figcaption>
                </p>
            </div>
        </div>
    </center>
    <center>
    <div class="container">
		<h1>Notice Board</h1>
		<div class="notice">
			<h2>Notice Title 1</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel risus eget velit eleifend ultrices. Sed vel nisl a magna blandit sodales vel vel nunc. Donec scelerisque varius erat a lacinia.</p>
		</div>
		<div class="notice">
			<h2>Notice Title 2</h2>
			<p>Phasellus quis risus enim. Sed ac odio id mauris ullamcorper feugiat. Integer sit amet dolor at risus vulputate faucibus. Praesent id turpis diam.</p>
		</div>
		<div class="notice">
			<h2>Notice Title 3</h2>
			<p>Proin quis augue ligula. Nunc interdum dapibus enim, in aliquet turpis suscipit nec. Pellentesque vel libero sit amet nisl malesuada eleifend non non sapien.</p>
		</div>
	</div>
    </center>
    <footer>
        <h3 class="frroter_txt" style="text-align: center; background-color:skyblue; color:green; height: 40px;"><b>Powered by CodeWave</b></h3>
    </footer>
</body>
</html>