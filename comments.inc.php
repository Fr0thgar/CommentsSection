<?php
function setComments($conn)
{
    if (isset($_POST['commentSubmit'])) {
        
        $uid = $_POST['uId'];
        $date = $_POST['Date'];
        $message = $_POST['message'];

        $sql = "INSERT INTO 'comments' (uId, Date, message) 
        VALUES ('.$uid.', '.$date.', '.$message.')";
        $result = $conn->query($sql);
    }
}
