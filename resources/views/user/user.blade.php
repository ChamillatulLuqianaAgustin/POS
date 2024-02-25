<html>
    <head>
        <title>User POS</title>
    </head>
    <body>
        <h1>Selamat Datang di Halaman User!</h1>
        <p>ID User: {{$id}}</p>
        <p>Nama User: {{$name}}</p>
        <br>
        <a href="{{ url('/home') }}">Home</a>
    </body>
</html>