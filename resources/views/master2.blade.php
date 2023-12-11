<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>5026221088 - Muhammad Rafi Widya Danendra</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-sm bg-light navbar-light">
            <!-- Brand -->
            <a class="navbar-brand" href="#">5026221088 - Muhammad Rafi Widya Danendra</a>

            <!-- Links -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="/dbpegawai">Pegawai</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/dbnilai">Nilai</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/dblipstick">Lipstick</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/dbmahasiswa">Mahasiswa</a>
              </li>

              <!-- Dropdown -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Database
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="/dbpegawai">Pegawai</a></li>
                    <li><a class="dropdown-item" href="/dbnilai">Nilai</a></li>
                    <li><a class="dropdown-item" href="/dblipstick">Lipstick</a></li>
                    <li><a class="dropdown-item" href="/dbmahasiswa">Mahassiwa</a></li>
                </ul>
              </li>

            </ul>
          </nav>
        <header>

            <h2>Blog 5026221088 - Muhammad Rafi Widya Danendra</h2>
            <nav>
                <a href="/blog">HOME</a>
                |
                <a href="/blog/tentang">TENTANG</a>
                |
                <a href="/blog/kontak">KONTAK</a>
            </nav>
        </header>
        <hr/>

        <div class="container">
            <!-- bagian judul halaman blog -->
            @yield('judul_halaman')

            @yield('konten')

        </div>

            <br/>
            <br/>
            <hr/>
            <footer>
                <p>&copy; <a href="https://www.malasngoding.com">www.malasngoding.com</a>. 2018 - 2019</p>
            </footer>

    </div>
</body>
</html>
