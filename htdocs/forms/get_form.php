<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>My Form</title>
        <style>
            input[type="text"] {
                background: yellow;
                font-family: "Courier New";
                color: red;
            }

            input[type="submit"] {
                color: red;
                font-family: Arial;
                font-size: 16pt;
                margin: 5px;
            }

            .buttons {
                width: 100%;
                text-align: center;
            }

           dl {
              width: 100%;
              overflow: hidden;
              padding: 0;
              margin: 0
            }
            dt {
              float: left;
              width: 20%;
              /* adjust the width; make sure the total of both is 100% */
              padding: 0;
              margin: 2px
            }
            dd {
              float: left;
              width: 70%;
              /* adjust the width; make sure the total of both is 100% */
              padding: 0;
              margin: 2px
            }
        </style>
    </head>
    <body>
        <form action="params.php?title=My Params" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Personal Info</legend>
                <dl>
                    <dt>Search String</dt>
                    <dd><input type="text" name="q"></dd>
                    <dt>Name</dt>
                    <dd><input type="text" name="name"></dd>
                    <dt>Is Active?</dt>
                    <dd><input type="checkbox" name="isActive"></dd>
                    <dt>Position</dt>
                    <dd>
                    <label> Student <input type="radio" name="position" value="student" checked></label>
                    <label> Professor <input type="radio" name="position" value="professor"></label>
                    <label> Manager <input type="radio" name="position" value="manager"></label>
                    </dd>
                    <dt>About Me</dt>
                    <dd><textarea name="aboutme" cols="30" rows="10"></textarea></dd>
                </dl>
            </fieldset>
            <fieldset>
                <legend>Select Lists</legend>
                <dl>
                    <dt>Hobbies</dt>
                    <dd>
                    <select name="hobby">
                        <option value="1" selected>Hobby 1</option>
                        <option value="2">Hobby 2</option>
                        <option value="3">Hobby 3</option>
                        <option value="4">Hobby 4</option>
                        <option value="5">Hobby 5</option>
                    </select>
                    </dd>
                    <dt>Modules</dt>
                    <dd>
                    <select name="modules[]" multiple="">
                        <option value="module 1">Module 1</option>
                        <option value="module 2">Module 2</option>
                        <option value="module 3">Module 3</option>
                        <option value="module 4">Module 4</option>
                        <option value="module 5">Module 5</option>
                    </select>
                    </dd>
                    <dt>Avatar Image</dt>
                    <dd><input type="file" name="avatar" accept="image/*"></dd>
                </dl>
            </fieldset>
            <input type="hidden" name="formNumber" value="1">
            <div class="buttons">
                <input type="submit" value="Submit">
            </div>

        </form>
    </body>
</html>
<!-- q=web+development&name=Sarvar&isActive=on&position=professor&hobby=3&modules%5B%5D=module+1&modules%5B%5D=module+3&aboutme=Bla+bla+bla -->
