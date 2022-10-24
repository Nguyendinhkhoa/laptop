<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Admin</title>
    <link rel="stylesheet" href="{{asset('public/backend/css/adminLogin.css')}}">
</head>
<body>
    <form class="box" action="admin-dashboard" method="post">
        {{ csrf_field() }}
        <h1>Login</h1>
        @php
          $messager = Session::get('messager');
            echo'<span class="error">' . $messager.'</span>'      ;
            Session::put('messager',null);  
            @endphp
        <input type="text" name="admin_email" placeholder="Username" id="">
        <input type="password" name="admin_password" placeholder="Password">
        <input type="submit" name="login" value="Login" id="">
    </form>
</body>
</html>