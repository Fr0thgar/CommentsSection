<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="This is an example of a meta description. this will often show up in search results.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>

<body>
    <header>
        <nav>
            <a href="#">
                <img src="assets/logo.png" alt="logo">
            </a>
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
            </ul>
            <div>
                <?php
                date_default_timezone_set('Europe/Copenhagen');
                include 'dbh.inc.php';
                include 'comments.inc.php';
                session_start();
                ?>

                <?php
                echo "<form method='POST' action='" . getLogin($conn) . "'>
            <input type= 'text' name='uid' placeholder='Username'>
            <input type='password' name='pwd' placeholder='Password'>
            <button type='submit' name='loginSubmit'>Login</button>
        </form>";
                echo "<form method='POST' action='" . userLogout() . "'>
            <button type='submit' name='logoutSubmit'>Log out</button>
        </form>";
                if (isset($_SESSION['id'])) {
                    echo "You are logged in!";
                }
                ?>
            </div>
        </nav>
    </header>