<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
</head>
<body>
   <center>
    @if ($errors->any())
    <ul>
        {!! implode('',$errors->all('<li>:message<li>')) !!}
    </ul>
@endif
<h5>{{ session()->get('mes'); }}</h5>
    <h1>Log In</h1> <form action="/authenticate" method="post">
        <label>email <input type="text" name="email"></label>
        <br>
        <label>password <input type="password" name="password"></label>
        <br>
        <input type="submit" value="login">
        @csrf
    </form>

    <a href="/register">Register</a>
</center>

</body>
</html>
