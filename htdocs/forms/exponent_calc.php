<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exponent Answer</title>
</head>
<body>
    <h1>
    <?php
        if ($_SERVER["REQUEST_METHOD"]=="GET") {
            print "HTTP GET is used to access this page";
        } elseif ($_SERVER["REQUEST_METHOD"]=="POST") {
            print "HTTP POST is used to access this page";
        }
    ?>
    </h1>
    <?php
        $base=$_REQUEST["base"];
        $power=$_REQUEST["power"];
    ?>

    <h2>
       <?= $base ?> ^ <?= $power ?> = <?= $base**$power ?>
    </h2>
</body>
</html>
