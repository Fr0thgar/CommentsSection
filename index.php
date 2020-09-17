<?php
date_default_timezone_set('Europe/Copenhagen');
include 'dbh.inc.php';
include 'comments.inc.php';

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="Style.css">

<body>

    <iframe src="https://wallpapercave.com/wp/wp1835118.jpg" frameborder="0" allowfullscreen></iframe>

    <?php
    echo "<form meth='POST' action='" . setComments($conn) . "'>
<input type='hidden' name='uid' value='Anonymous'>
<input type='hidden' name='date' value='" . date('Y-m-d H:i:s') . "'>
<textarea name='message'></textarea> <br>
<button name='commentSubmit' type='submit'>Submit</button>

</form>";
    ?>
</body>
</head>

</html>