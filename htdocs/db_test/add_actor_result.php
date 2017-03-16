<?php
    $db=new PDO("mysql:dbname=imdb;host=localhost","root","");

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);

    $sth=$db->prepare("INSERT INTO actors(first_name, last_name, gender) VALUES (?,?,?)");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Actor Result</title>
</head>
<body>
<h1>
    <?php
        try {
            $sth->execute(array($_POST["first_name"], $_POST["last_name"], $_POST["gender"]));
            print "Thank you for submitting a new actor!";
        } catch (PDOException $ex) {
            print "Actor is not submitted. \n " . $ex->getMessage();
        }
     ?>
</h1>
<h2><a href="add_actor.php">Add New Actor</a></h2>
</body>
</html>
