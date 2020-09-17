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


    <?php
    $cid = $_POST['cid'];
    $uid = $_POST['uid'];
    $date = $_POST['date'];
    $message = $_POST['message'];

    echo "<form method='POST' action='" . editComments($conn) . "'>
    <input type='hidden' name='cid' value='" . $cid . "'>   
<input type='hidden' name='uid' value='" . $uid . "'>
<input type='hidden' name='date' value='" . $date . "'>
<textarea name='message' > ".$message."</textarea> <br>
<button type='submit' name='editSubmit' >Edit</button>

</form>";


    ?>
</body>
</head>

</html>