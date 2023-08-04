<?php
session_start(); // Start the session

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    include 'db_connect.php';
    $login = false;

    // Escape user inputs for security (prevent SQL injection)
    $user_role = $conn->real_escape_string($_POST['user_role']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $sql = "";
    // Determine the appropriate table based on the selected user_role
    if ($user_role == "Admin") {
        $sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
    }
    else if ($user_role == "Teacher") {
        $sql = "SELECT * FROM teachers WHERE email = '$email' AND password = '$password'";
    }
    else if ($user_role == "Student") {
        $sql = "SELECT * FROM students WHERE email = '$email' AND password = '$password'";
    }
    else {
        echo "Invalid user role selected!";
    }
    
    // Execute the query
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        // User exists, credentials are valid
        $user = $result->fetch_assoc();
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['loggedin'] = true;
        $_SESSION['user_role'] = $user_role;
        $_SESSION['username'] = $user['name'];

        header("Location: index.php");
    } else {
        // Invalid credentials
        echo "Invalid credentials. Please check your email and password.";
    }

    // Close the connection
    $conn->close();
}
?>


<!DOCTYPE html>
<html>
    <html>
        <head>
            <title></title>
            <link rel="stylesheet" href="Login_style.css">
        </head>
        <body>
            <div class="maindiv">
                <br><br>
                <h1 style="color:rgb(43, 41, 41);font-size: 30px;text-align: center;">e-Learning Management System</h1>
                <img src="user.png" alt="" height="70px" width="70px" style="margin-left: 46%;">
                <div class="middiv">
                    <form action="login.php" method="post">
                        <table>
                            <tr>
                                <td>
                                    <select name="user_role" style="width: 800px; height:55px; font-size:20px;margin-left:3.8%; margin-top:2%">
                                        <option value="">-Select User Role-</option>
                                        <option value="Admin">Admin</option> 
                                        <option value="Teacher">Teacher</option> 
                                        <option value="Student">Student</option> 
                                    </select>
                                    <br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="email" placeholder="Enter e-mail" name="email" style="width: 792.5px; height:55px; font-size:20px;margin-left:3.8%;margin-top:2%;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="password" placeholder="Enter password" name="password" style="width: 792.5px; height:55px; font-size:20px;margin-left:3.8%;margin-top:2%;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button style="width: 800px; height:55px; font-size:35px;margin-left:3.8%;margin-top:2%;color:white; background-color:#4CAF50;border-color:#4CAF50">Login</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </body>
    </html>
</html>