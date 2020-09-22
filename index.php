<?php
date_default_timezone_set('Europe/Copenhagen');
include 'dbh.inc.php';
include 'comments.inc.php';
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>

<body>

    <?php
        echo "<form method='POST' action='" . getLogin($conn) . "'>
            <input type= 'text' name='uid' placeholder='Username'>
            <input type='password ' name='pwd' placeholder='Password'>
            <button type='submit' name='loginSubmit'>Login</button>
        </form>";
        echo "<form method='POST' action='" . userLogout() . "'>
            <button type='submit' name='logoutSubmit'>Log out</button>
        </form>";
        if (isset($_SESSION['id'])) {
            echo "You are logged in!";
        } 
    ?>

    <?php
    if (isset($_SESSION['id'])) {
        echo "<form method='POST' action='" . setComments($conn) . "'>
            <input type='hidden' name='uid' value='".$_SESSION['id']."'>
            <input type='hidden' name='date' value='" . date('Y-m-d H:i:s') . "'>
            <textarea name='message' placeholder='write your comment here'></textarea> <br>
            <button type='submit' name='commentSubmit'>Comment</button>
            </form>";
    } else {
        echo "You need to be logged in to comment!
        <br><br>";
    }

    getComments($conn);
    ?>
</body>

</html>