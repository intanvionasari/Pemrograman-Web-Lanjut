<html>
<link rel ="stylesheet" type="text/css" href="{{asset('/css/app.css')}}">
<head>
    <title>master</title>
</head>
<body>
    
    <header>
    <nav>
    <div id="palingatas">
    <a href="/halamanhome" id="tulisanmenu">Home</a>
    <a href="/about" id="tulisanmenu">About</a>
    <a href="/article" id="tulisanmenu">Article</a>
    </nav>
    </div>
    </header>
    <hr/>
    <br/>

    <h3>@yield('judul')</h3>

    <!--side bar-->

    @section('sidebar')
    <h1>SELAMAT DATANG DI WEBSITE SAYA</h1>
    <h1>Website Ini Berisi Tentang Kabupaten Tuban Jawa Timur dan Tentang Saya</h1>
    @show
    <hr/>

    <!--konten-->
    
    @yield('content')
    <br/>

    <hr/> 

    <!--footer-->
     <footer>
     @2020 IntanVionasari
     </footer>
</body>
</html>