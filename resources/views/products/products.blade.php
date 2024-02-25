<html>
    <head>
        <title>Products POS</title>
    </head>
    <body>
        <h1>Selamat Datang di Halaman Products!</h1>
        <h2>Daftar Kategori Products</h2>
        <li><a href="{{ url('/category/food-beverage') }}">Food Beverage</a>
        </li>
        <li><a href="{{ url('/category/beauty-health') }}">Beauty Health</a>
        </li>
        <li><a href="{{ url('/category/home-care') }}">Home Care</a>
        </li>
        <li><a href="{{ url('/category/baby-kid') }}">Baby Kid</a>
        </li><br>
        <a href="{{ url('/home') }}">Home</a>
    </body>
</html>