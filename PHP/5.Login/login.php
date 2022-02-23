<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="login.css" rel="stylesheet">
</head>
<body>
    <div>
        <form action="login-data.php" method="POST">
            <label>
                ID : <br>
                <input type="text" name="id" required>
</label>
            <label>
                Firstname : <br>
                <input type="text" name="fname" required>
            </label>
            <label>
                Lastname : <br>
                <input type="text" name="lname" required>
            </label>
            <label>
                Email : <br>
                <input type="text" name="useremail" required>
            </label>
            <label>
                Phone No. : <br>
                <input type="text" name="userphone" required>
            </label>
            <br>
            <input id="submit" type="submit" value="submit" name="submit">
        </form>
    </div>
</body>
</html>