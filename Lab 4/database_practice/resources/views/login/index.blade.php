<html>
    <head>
        <title>Database - Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../styles/lawyer_styles.css">
    </head>
    <body>
        <center>
            <form method="POST" style="padding:20px;">
            @csrf
                <table>
                    <tr>
                        <td align="center" style="padding:20px;">
                            <div class="card border-success mb3 dropshadow" style="height:350px;width:250px">
                                <div class="card-header">Login</div>
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td style="padding-bottom:10px;"><input class="form-control" type="text" name="login_email" id="login_email" placeholder="Email" value="{{old('login_email')}}"><span id="err_login_email" style="color:red;">{{$errors->first('login_email')}}</span></td>
                                        </tr>
                                        <tr>
                                            <td style="padding-bottom:20px;"><input class="form-control" type="password" name="login_pass" id="login_pass" placeholder="Password" value="{{old('login_pass')}}"><span id="err_login_pass" style="color:red;">{{$errors->first('login_pass')}}</span></td>
                                        </tr>
                                    </table><br><br>
                                    <input class="btn btn-success" type="submit" name="login_button" value="Login">
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
            {{session('msg')}}
        </center>
    </body>
</html>