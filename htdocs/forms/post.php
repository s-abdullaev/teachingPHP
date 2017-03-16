<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Print All POST Parameters</title>
</head>
<body>
    <h1>Parameters passed by HTTP POST</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
    ?>
        <h2><?= $_GET["title"] ?></h2>
        <dl>
            <?php foreach($_POST as $k => $v) {?>
                <dt><?= $k ?></dt>
                <dd><?= $v ?></dd>
            <?php } ?>
        </dl>
    <?php } ?>
    <?php
    if(is_uploaded_file($_FILES["avatar"]["tmp_name"])) {
        $img_path='files/'.$_FILES["avatar"]["name"];
        move_uploaded_file($_FILES["avatar"]["tmp_name"],
                            $img_path);
        print "File is succesfully uploaded!"; ?>

        <img src="<?= $img_path ?>" alt="">

    <?php
        } else {
            print "File is not uploaded!";
        }
    ?>

</body>
</html>
