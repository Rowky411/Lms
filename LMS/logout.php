<?php

session_start();


if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    
    session_unset();
    session_destroy();

    header("Location: index.php");
    exit();
} else {
    header("Location: index.php");
    exit();
}
?>