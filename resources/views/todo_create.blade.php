<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <h1>Fill Form</h1>
    <a href="todo_show">Back</a><br><br>
    <form method="post" action="todo_submit">
        @csrf
        <table border=1 id="customers">
            <tr>
                <td>Name</td>
                <td><input type="textname" name="name"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit"></td>
            </tr>

        </table>
    </form>
</body>

</html>