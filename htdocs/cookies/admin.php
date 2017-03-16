<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
</head>
<body>
    <?php
        if (isset($_SESSION["firstName"])) {
            print "Hello, " . $_SESSION["firstName"] . "!\n";
            print "You are admin now!";
        } else {
            print "Go away, goofy user! You are not admin!";
        }
    ?>
    <form action="remove_cookies.php">
        <input type="submit" value="Remove Cookies">
    </form>
</body>
</html>
