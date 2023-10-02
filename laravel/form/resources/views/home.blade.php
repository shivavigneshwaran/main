<h1>welcome<h1>
    <h1>  {{ auth()->user()->name }}<h1>

<h3>{{ session()->get('user');  }}</h3>

<h3>{{ session()->get('email');  }}</h3>


    <p><a href="/logout">Logout</a></p>

    <p><a href="/testshow">testshow</a></p>
