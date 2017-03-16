<?php
session_start();
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $name=$_POST["firstName"];
    $_SESSION["firstName"]=$name;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tell Me Your Name</title>
</head>
<body>
    <form action="index.php" method="post">
        Tell me your name: <input type="text" name="firstName" id="">
        <input type="submit" value="Submit">
    </form>
    <?php
        if (isset($name)) {
            print "Hello, " . $name . "!";
        }
    ?>
</body>
</html>
