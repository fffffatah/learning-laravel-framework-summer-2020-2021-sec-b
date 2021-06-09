<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <center>
    <h1>Users</h1>
    <table border="2">
        <tr>
            <th>ID</th>
            <th>Fullname</th>
            <th>Username</th>
            <th>Email</th>
            <th>Options</th>
        </tr>
        @foreach ($userList as $user)
        <tr>
            <td>{{$user['id']}}</td>
            <td>{{$user['fullname']}}</td>
            <td>{{$user['username']}}</td>
            <td>{{$user['email']}}</td>
            <td>
                <a href="/user/details/{{$user['id']}}"> Details </a> |
                <a href="/user/edit/{{$user['id']}}"> Edit </a> |
                <a href="/user/delete/{{$user['id']}}"> Delete </a> |
            </td>
        </tr>
        @endforeach
    </table>
    </center>
</body>
</html>