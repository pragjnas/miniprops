@extends('layouts.default')

@section('content')

    <html>
<head>
    <title>Login Page</title>
</head>
<body>
<form name="loginForm" method="post" action="signin.php">
    <table width="20%" bgcolor="#e6e6fa" align="center">

        <tr>
            <td colspan=2><center><font size=4><b>Log in</b></font></center></td>
        </tr>

        <tr>
            <td>Username:</td>
            <td><input type="text" size=25 name="userid"></td>
        </tr>

        <tr>
            <td>Password:</td>
            <td><input type="Password" size=25 name="pwd"></td>
        </tr>

        <tr>
            <td ><input type="Reset"></td>
            <td><input type="submit" onclick="return check(this.form)" value="Login"></td>
        </tr>

    </table>
</form>

</body>
</html>

@endsection