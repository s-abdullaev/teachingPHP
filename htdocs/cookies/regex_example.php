<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RegEx Example</title>
</head>
<body>
    <form action="regex_example.php" method="post">
        <dl>
            <dt>Pattern</dt>
            <dd><input type="text" name="pattern" id=""></dd>
            <dt>Text</dt>
            <dd><textarea name="text" id="" cols="30" rows="10">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda nostrum repellat, sed. Ad voluptates odio alias earum ut debitis deleniti hic sapiente iure, suscipit voluptatibus, quia nihil perspiciatis animi temporibus.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus vel illo molestiae culpa exercitationem qui! Provident dolorem ipsa quisquam magni quasi, dolores vel. Qui nesciunt, ullam repellendus alias reprehenderit dolorem.
            </textarea></dd>
            <dt>Matches</dt>
            <dd><pre>
                <?php
                    if ($_SERVER["REQUEST_METHOD"]=="POST") {
                        $pattern=$_POST["pattern"];
                        $text=$_POST["text"];
                        $matches=array();
                        if (preg_match_all($pattern, $text, $matches)) {
                            print_r($matches);
                        }

                    } else {
                        print "No data submitted";
                    }
                ?>
            </pre>
            </dd>
            <dt></dt>
            <dd><input type="submit" value="Submit"></dd>
        </dl>

    </form>



</body>
</html>
