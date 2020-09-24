<?php
require "header.php";
?>

<?php
if (isset($_SESSION['id'])) {
    echo "<form method='POST' action='" . setComments($conn) . "'>
            <input type='hidden' name='uid' value='" . $_SESSION['id'] . "'>
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

<?php
require "footer.php";
?>