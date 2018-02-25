@extends('layouts.default')

@section('content')

    <html>
    <head>
        <title>Sign up Page</title>
    </head>
    <body>
    <form name="signupForm" method="post" action="signup.blade.php">
        <table width="20%" bgcolor="#e6e6fa" align="center">

            <tr>
                <td colspan=2><center><font size=4><b>Sign up</b></font></center></td>
            </tr>

            <tr>
                <td>Name:</td>
                <td><input type="text" size=25 name="userid"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" size=25 name="email"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="Password" size=25 name="pwd"></td>
            </tr>
            <tr>
                <td>Confirm Password:</td>
                <td><input type="Password" size=25 name="pwd"></td>
            </tr>

        </table>
    </form>
    <div class="wrapper" align="center">
        <button class="button">Sign up</button>
    </div>
    </body>
    </html>

@endsection