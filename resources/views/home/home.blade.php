<html>
    <head>
        <title>Home POS</title>
    </head>
    <body>
        <h1>Selamat Datang di Aplikasi POS!</h1>
        <li><a href="{{ url('/products') }}">Halaman Products</a>
        </li>
        <li><a href="{{ url('/user/{id}/name/{name}') }}">Halaman User</a>
        </li>
        <li><a href="{{ url('/penjualan') }}">Halaman Transaksi Penjualan</a></li>
    </body>
</html>