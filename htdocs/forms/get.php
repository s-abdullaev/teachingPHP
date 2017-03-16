<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Print All Get Parameters</title>
</head>
<body>
    <h1>Parameters passed by HTTP GET</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"]=="GET") {
    ?>
        <h2><?= $_GET["title"] ?></h2>
        <dl>
            <?php foreach($_GET as $k => $v) {?>
                <dt><?= $k ?></dt>
                <dd><?= $v ?></dd>
            <?php } ?>
        </dl>
    <?php } ?>
</body>
</html>
