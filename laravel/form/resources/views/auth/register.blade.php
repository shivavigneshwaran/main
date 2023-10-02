<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Form</title>
</head>
<body>
   <center>
    @if ($errors->any())
        <ul>
            {!! implode('',$errors->all('<li>:message<li>')) !!}
        </ul>
    @endif
    <h1>Register Form</h1> <form action="/store" method="post">
    <label>Name <input type="text" name="name"></label>
    <br>
    <label>email <input type="text" name="email"></label>
        <br>
        <label>password <input type="password" name="password"></label>
        <br>
        <label>password Confirmation <input type="password" name="password_confirmation"></label>
        <br>
        <input type="submit" value="login">
        @csrf
    </form></center>

</body>
</html>
