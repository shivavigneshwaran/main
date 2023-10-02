<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Name - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</head>
<body>
    @section('navbar')
    <div class="container">
    <nav class="navbar fixed-top bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/home">Home</a>
          <a class="navbar-brand" href="/about">about us</a>
          <a class="navbar-brand" href="/logout">Log Out</a>
        </div>



      </nav>
    </div>
      @show
    @section('sidebar')
    This is the master sidebar.
    @endsection

<div class="container" style="margin-top: 95px;">
     @yield('content')
</div>

<div class="container">
    @yield('footer')
</div>


</body>
</html>
