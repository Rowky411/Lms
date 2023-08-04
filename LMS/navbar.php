<?php
    session_start(); 
    $loggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
    // Check the user role if available in the session
    $userRole = isset($_SESSION['user_role']) ? $_SESSION['user_role'] : null;
    // User's name if logged in
    $userName = isset($_SESSION['username']) ? $_SESSION['username'] : '';

    // Function to display the proper dashboard link based on the user role
    function getDashboardLink($userRole) {
        switch ($userRole) {
            case 'Admin':
                return 'a_dashboard.php';
            case 'Student':
                return 's_dashboard.php';
            case 'Teacher':
                return 't_dashboard.php'; // Replace with the teacher dashboard page
            default:
                return '';
        }
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>navbar</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
</head>
<body>

<nav>
        <label class="logo">e-Learning Management System</label>
        <ul>
            <li><a href="">Home</a></li>
            
            <?php if ($loggedIn && $userRole === 'Admin'): ?>
                <li><a href="<?php echo getDashboardLink($userRole); ?>">Admin Dashboard</a></li>
            
            <?php elseif ($loggedIn && $userRole === 'Student'): ?>
                <li><a href="<?php echo getDashboardLink($userRole); ?>">Student Dashboard</a></li>
            
            <?php endif; ?>
            <li><a href="">Contact</a></li>
            <li><a href="">FAQ</a></li>
            <?php if (!$loggedIn): ?>
                <li><a href="login.php" class="btn btn-success">Login</a></li>
            <?php else: ?>
                <li><a href="#"><?php echo $userName; ?> </a></li>
                <li><a href="logout.php">Logout</a></li>
            <?php endif; ?>
        </ul>
    </nav>
    
</body>
</html>