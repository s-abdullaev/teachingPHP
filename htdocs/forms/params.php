<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Params Sent</title>
</head>
<body>
    <h1>Paramaters Sent to Server</h1>
    <dl>
        <?php // print $_GET["title"] ?>


        <?php foreach($_POST as $k => $v) { ?>
        <dt><?= $k ?></dt>
        <dd>
        <?php if (is_array($v)) {?>
            <pre><?= print_r($v) ?></pre>
        <?php } else { ?>
            <?= $v ?>
        <?php } ?>
        </dd>
        <?php } ?>
    </dl>
    <?php
        if(is_uploaded_file($_FILES["avatar"]["tmp_name"])) {
            $file_path="files/".$_FILES["avatar"]["name"];

            move_uploaded_file($_FILES["avatar"]["tmp_name"],
                                $file_path);
        ?>
        <img src="<?= $file_path ?>" alt="">
    <?php } else { ?>
        <h2>File is not uploaded!</h2>
    <?php } ?>
</body>
</html>
