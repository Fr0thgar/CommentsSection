<?php
function setComments($conn)
{
    if (isset($_POST['commentSubmit'])) {
        
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "INSERT INTO 'comments' (uId, Date, message) VALUES ('.$uid.', DATETIME , '.$message.')";
        $result = $conn->query($sql);
    }
}
