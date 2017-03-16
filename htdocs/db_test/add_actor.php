
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Actor</title>
</head>
<body>
    <h2>Add Actor</h2>
    <form action="add_actor_result.php" method="post">
        <dl>
            <dt>First Name</dt>
            <dd><input type="text" name="first_name" id=""></dd>
            <dt>Last Name</dt>
            <dd><input type="text" name="last_name" id=""></dd>
            <dt>Gender</dt>
            <dd><select name="gender" id="">
                <option value="M">Male</option>
                <option value="F">Female</option>
            </select></dd>
            <dt></dt>
            <dd><input type="submit" value="Submit"></dd>
        </dl>
    </form>
</body>
</html>
