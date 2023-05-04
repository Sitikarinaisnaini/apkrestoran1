<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <a href="/web/beranda/">Beranda</a> |
            <a href="/web/profil/">Profil</a> |
            <a href="/web/kontak/">Kontak</a> |
        </nav>
    </header>  
    
    <br><br>

    @yield('namahalaman') 

    @yield('konten')
    <br><br>
    <footer>
        &copy; 2023-ReservasiRestoran
    </footer> 
</body>
</html>