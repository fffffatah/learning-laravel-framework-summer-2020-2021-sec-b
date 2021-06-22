<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
</head>
<body>
    <h1>Delete {{$user['name']}} ?</h1>
    <form method="post">
    <input type="submit" name="Submit" value="Confirm">
    </form>
    <a href="/home"> Back </a>
</body>
</html>