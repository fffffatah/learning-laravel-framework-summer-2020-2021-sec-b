<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <form method="post">
	<table>
        <tr>
			<td>Email</td>
			<td><input type="text" name="email"></td>
		</tr>
        <tr>
			<td>Full Name</td>
			<td><input type="text" name="fullname"></td>
		</tr>
		<tr>
			<td>User Name</td>
			<td><input type="text" name="uname"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="pass"></td>
		</tr>
        <tr>
			<td>Confirm Password</td>
			<td><input type="password" name="confirmpass"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="signup" value="Signup"></td>
		</tr>
	</table>
	</form>
	<a href="/login"> Login</a>
</body>
</html>