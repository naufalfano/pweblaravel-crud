<!DOCTYPE html>
<html>

<head>
    <title>Tutorial Laravel #8 : @yield('judulku')</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <header>

        <h2>
            @section('headerku')

            @show
        </h2>
        <nav>
            <a href="/blog">HOME</a>
            |
            <a href="/blog/tentang">TENTANG</a>
            |
            <a href="/blog/kontak">KONTAK</a>
        </nav>
    </header>
    <hr />
    <br />
    <br />

    <!-- bagian judul halaman blog -->
    <h3> @yield('judul_halaman') </h3>


    <!-- bagian konten blog -->
    @yield('konten')


    <br />
    <br />
    <hr />
    <footer>
        <p>&copy; <a href="https://www.malasngoding.com">www.malasngoding.com</a>. 2018 - 2019</p>
    </footer>

</body>

</html>
